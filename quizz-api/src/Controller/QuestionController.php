<?php

namespace App\Controller;

use App\Dto\QuestionDt;
use App\Dto\QuestionDto;
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
        return  $this->json($questions, 200, [], ['groups'=>['question', 'quizz']]);
    }

    /**
     * @Route("/new", name="question_new", methods={"POST"})
     */
    public function new(
                        Request $request,
                        SerializerInterface $serializer,
                        ValidatorInterface $validator,
                        CategoryRepository $categoryRepository,
                        QuestionRepository $questionRepository
                        ): Response
    {
        // deserialize the json
        try {
            $questionDto = $serializer->deserialize($request->getContent(), QuestionDto::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Invalid Json '] , 400, []);
        }
        $errors = $validator->validate($questionDto);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this->json($json, Response::HTTP_BAD_REQUEST, [], true);
        }

        $questionCheck = $questionRepository ->findOneBy(array('label' =>$questionDto->getLabel()));
        if($questionCheck){
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Question exist '] , 400, []);
        }
        $category = $categoryRepository ->find($questionDto->getCategoryId());
        if(!$category){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Category not found '] , 404, []);
        }
        $question = new Question();
        $question->setCategory($category);
        $question->setLabel($questionDto->getLabel());
        $question->setDifficulty($questionDto->getDifficulty());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($question);
        $entityManager->flush();
        return $this->json($question, 201, [], ['groups'=>['question', 'quizz']]);

    }

    /**
     * @Route("/{id}", name="question_show", methods={"GET"})
     */
    public function show(QuestionRepository $questionRepository, int $id)
    {
        $question = $questionRepository->find($id);
        if(!$question){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Question Not Found '] , 404, []);
        }
        return  $this->json($question, 200, [], ['groups'=>['question', 'quizz']]);
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
        return  $this -> json($question, 200, [], ['groups'=>['question', 'quizz']]);
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
