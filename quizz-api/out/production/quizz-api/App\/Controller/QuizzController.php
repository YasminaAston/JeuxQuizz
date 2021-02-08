<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Game;
use App\Entity\Quizz;
use App\Form\QuizzType;
use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizzRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\User;
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
        $quizzes = $this->quizzRepository->findAll();
        if (sizeof($quizzes) > 0){
            return $this -> json($quizzes, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity quizz is empty'], 200);
        }
    }

    /**
     * @Route("/getBycategoryAndDifficulty/{user_id}/{category_id}/{difficulty}", name="quizz_igetBycategoryAndDifficulty", methods={"GET"})
     */
    public function getBycategoryAndDifficulty(
                                               GameRepository $gameRepository,
                                               QuestionRepository $questionRepository,
                                               CategoryRepository $categoryRepository,
                                               UserRepository $userRepository,
                                               $category_id, $difficulty,
                                               $user_id
                                                ): Response
    {

        $user = $userRepository-> find($user_id);
        if(!$user) {
            return new JsonResponse($this-> json(['status'=>404, 'meassage'=>'User not found']), Response::HTTP_BAD_REQUEST, [], true);
        }
         $category = $categoryRepository->find($category_id);
         $questions = $questionRepository->findBy(array('category' => $category, 'difficulty' => $difficulty));
        if (sizeof($questions) > 0){
            $entityManager = $this->getDoctrine()->getManager();
            $game = new Game();
            $game->setUser($user);
            $questionsQuizz = array_rand($questions, 10);

            foreach ($questionsQuizz as $key => $value) {
                echo "{$key} => {$value} ";
                $quizz = new Quizz();
                $quizz->setQuestion($value);
                $entityManager->persist($quizz);
                $entityManager->flush();
                // array_push($quizzes, $quizz);
                $game->addQuiz($quizz);
            }
            $entityManager->persist($game);
            $entityManager->flush();
            return $this -> json($game, 200);
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
     * @Route("/{id}/edit", name="quizz_edit", methods={"GET","POST"})
     */
    public function edit(
                         Request $request,
                         SerializerInterface $serializer,
                         ValidatorInterface $validator,
                         int $id
                         ): Response
    {
        $quizz = $this-> quizzRepository->find($id);
        // deserialize the json
        try {
            $quizzData = $serializer->deserialize($request->getContent(), Quizz::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $errors = $validator->validate($quizzData);
        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this-> json($json , 400, []);

        }
        if ($errors) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $quizz->setIsCorrect($quizzData->getIsCorrect());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($quizz);
        $entityManager->flush();
        return  $this -> json($quizz, 200);
    }

    /**
     * @Route("/{id}", name="quizz_delete", methods={"DELETE"})
     */
    public function delete(int $id): Response
    {
        $quizz = $this-> quizzRepository ->find($id);
        if (!$quizz) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Quizz not found '] , 404, []);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($quizz);
        $entityManager->flush();
        return $this-> json(['status'=> Response::HTTP_OK, 'message'=> 'User deleted'] , 200, []);
    }
}
