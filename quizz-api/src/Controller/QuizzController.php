<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Quizz;
use App\Form\QuizzType;
use App\Repository\CategoryRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizzRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/quizz")
 */
class QuizzController extends AbstractController
{
    protected QuizzRepository $quizzRepository;

    /**
     * QuizzController constructor.
     * @param QuizzRepository $quizzRepository
     */
    public function __construct(QuizzRepository $quizzRepository)
    {
        $this->quizzRepository = $quizzRepository;
    }
    /**
     * @Route("/", name="quizz_index", methods={"GET"})
     */
    public function getAll(QuizzRepository $quizzRepository): Response
    {
        $quizzes = $this->$quizzRepository->findAll();
        if (sizeof($quizzes) > 0){
            return $this -> json($quizzes, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity quizz is empty'], 200);
        }
    }

    /**
     * @Route("/getBycategoryAndDifficulty/{category_id}/{difficulty}", name="quizz_igetBycategoryAndDifficulty", methods={"GET"})
     */
    public function getBycategoryAndDifficulty(QuestionRepository $questionRepository, CategoryRepository $categoryRepository, $category_id, $difficulty): Response
    {

        $category = $categoryRepository->find($category_id);
         $questions = $questionRepository->findBy(array('category' => $category, 'difficulty' => $difficulty));
        if (sizeof($questions) > 0){
            $questionsQuizz = array_rand($questions, 10);

            foreach ($questionsQuizz as $key => $value) {
                echo "{$key} => {$value} ";
                $quizz = new Quizz();
                $quizz->setQuestion($value);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($quizz);
                $entityManager->flush();
                array_push($quizzes, $quizz);
            }

            return $this -> json($questionsQuizz, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity question is empty'], 200);
        }
        //return $this -> json(['category_id'=> $category_id, 'difficulty'=> $difficulty], 200);
    }

    /**
     * @Route("/{id}", name="quizz_show", methods={"GET"})
     */
    public function show(int $id): Response
    {
        $quizz = $this-> quizzRepository-> find($id);
        if(!$quizz){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Quizz Not Found '] , 404, []);
        }
        return  $this->json($quizz);
    }


    /**
     * @Route("/new", name="quizz_new", methods={"GET","POST"})
     */
    public function new(
                        Request $request,
                        SerializerInterface $serializer,
                        ValidatorInterface $validator
                        ): Response
    {
        // deserialize the json
        try {
            $quizz = $serializer->deserialize($request->getContent(), Quizz::class, 'json');
        } catch (NotEncodableValueException $exception) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Invalid Json');
        }
        $errors = $validator->validate($quizz);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return new JsonResponse($json, Response::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($quizz);
        $entityManager->flush();
        return new Response( $this -> json($quizz, 201));
    }

    /**
     * @Route("/{id}/edit", name="quizz_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Quizz $quizz): Response
    {
        $form = $this->createForm(QuizzType::class, $quizz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quizz_index');
        }

        return $this->render('quizz/edit.html.twig', [
            'quizz' => $quizz,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="quizz_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Quizz $quizz): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quizz->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($quizz);
            $entityManager->flush();
        }

        return $this->redirectToRoute('quizz_index');
    }
}
