<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\CategoryRepository;
use App\Repository\QuestionRepository;
use App\Repository\ResponseRepository;
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
 * @Route("/question")
 */
class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="question_index", methods={"GET"})
     */
    public function getAll(QuestionRepository $questionRepository): Response
    {
        $questions = $questionRepository->findAll();
        if(sizeof($questions) == 0){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'No question found '] , 404, []);
        }
        return  $this->json($questions);
    }

    /**
     * @Route("/new", name="question_new", methods={"PUT"})
     */
    public function new(
                        Request $request,
                        SerializerInterface $serializer,
                        ValidatorInterface $validator
                        ): Response
    {
        // deserialize the json
        try {
            $question = $serializer->deserialize($request->getContent(), Question::class, 'json');
        } catch (NotEncodableValueException $exception) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Invalid Json');
        }
        $errors = $validator->validate($question);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return new JsonResponse($json, Response::HTTP_BAD_REQUEST, [], true);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($question);
        $entityManager->flush();
        return new Response( $this -> json($question, 201));

    }

    /**
     * @Route("/{id}", name="question_show", methods={"GET"})
     */
    public function show(QuestionRepository $questionRepository, int $id): Response
    {
        $question = $this->json($questionRepository->find($id));
        if(!$question){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Question Not Found '] , 404, []);
        }
        return  $this->json($question);
    }

    /**
     * @Route("/{id}/edit", name="question_edit", methods={"PUT"})
     */
    public function edit(
                         QuestionRepository $questionRepository,
                         Request $request,
                         SerializerInterface $serializer,
                         ValidatorInterface $validator,
                         ResponseRepository $responseRepository,
                         int $id
                         ): Response
    {
        $question = $questionRepository ->find($id);
        if (!$question) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Question not found '] , 404, []);
        }
        // deserialize the json
        try {
            $questionData = $serializer->deserialize($request->getContent(), Question::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $errors = $validator->validate($questionData);
        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this-> json($json , 400, []);

        }
        $question->setLabel($questionData->getLabel());
        $question->setCategory($questionData->getCategory());
        $question->setDifficulty($questionData->getDifficulty());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($question);
        $entityManager->flush();
        return  $this -> json($question, 200);
    }

    /**
     * @Route("/{id}", name="question_delete", methods={"DELETE"})
     */
    public function delete(Request $request, QuestionRepository $questionRepository, int $id): Response
    {
        $question = $questionRepository ->find($id);
        if (!$question) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Question not found '] , 404, []);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($question);
        $entityManager->flush();
        return $this-> json(['status'=> Response::HTTP_OK, 'message'=> 'Question deleted'] , 200, []);
    }
}
