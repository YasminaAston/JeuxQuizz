<?php

namespace App\Controller;

use App\Entity\Response;
use App\Form\ResponseType;
use App\Repository\QuestionRepository;
use App\Repository\ResponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/response")
 */
class ResponseController extends AbstractController
{

    protected ResponseRepository $responseRepository;

    /**
     * ResponseController constructor.
     * @param ResponseRepository $responseRepository
     */
    public function __construct(ResponseRepository $responseRepository)
    {
        $this->responseRepository = $responseRepository;
    }


    /**
     * @Route("/", name="response_index", methods={"GET"})
     * @param ResponseRepository $responseRepository
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getAll(ResponseRepository $responseRepository)
    {
        $responses =  $responseRepository->findAll();
        if(sizeof($responses) > 0){
          return $this->json($responses, 200);
        }else {
            return $this->json(['status'=> \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND, 'message'=> 'Response is empty '], 404);
        }


    }

    /**
     * @Route("/new", name="response_new", methods={"GET","POST"})
     */
    public function new(
                        Request $request,
                        SerializerInterface $serializer,
                        ValidatorInterface $validator
                        )
    {
        // deserialize the json
        try {
            $response = $serializer->deserialize($request->getContent(), Response::class, 'json');
        } catch (NotEncodableValueException $exception) {
            throw new HttpException(\Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST, 'Invalid Json');
        }
        $errors = $validator->validate($response);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this->json($json, \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($response);
        $entityManager->flush();
        return $this -> json($response, 201);
    }

    /**
     * @Route("/{id}", name="response_show", methods={"GET"})
     */
    public function show(int $id)
    {
        $response = $this->responseRepository->find($id);
        if(!$response){
            return $this-> json(['status'=> \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND, 'message'=> 'Response Not Found '] , 404, []);
        }
        return  $this->json($response);
    }

    /**
     * @Route("/{question_id}/edit", name="response_edit", methods={"GET","POST"})
     */
    public function edit(
                         Request $request,
                         QuestionRepository $questionRepository,
                         SerializerInterface $serializer,
                         ValidatorInterface $validator,
                         int $question_id
                         ): JsonResponse
    {
        $question = $questionRepository ->find($question_id);
        if (!$question) {
            return $this-> json(['status'=> \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND, 'message'=> 'Question not found '] , 404, []);
        }
        // deserialize the json
        try {
            $responseData = $serializer->deserialize($request->getContent(), Response::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> 400, 'message'=> 'Bad request '] , 400, []);
        }
        $errors = $validator->validate($responseData);
        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this-> json($json , 400, []);

        }

        $response = new Response();
        $response->setLabel($responseData->getLabel());
        $response->setIsCorrect($responseData->getIsCorrect());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($response);
        $entityManager->flush();
        $question->addResponse($response);

        $entityManager->persist($question);
        $entityManager->flush();

        return  $this -> json($response, 200);
    }

    /**
     * @Route("/{id}", name="response_delete", methods={"DELETE"})
     */
    public function delete(int $id)
    {
        $response = $this-> responseRepository ->find($id);
        if (!$response) {
            return $this-> json(['status'=> \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND, 'message'=> 'Response not found '] , 404, []);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($response);
        $entityManager->flush();
        return $this-> json(['status'=> \Symfony\Component\HttpFoundation\Response::HTTP_OK, 'message'=> 'Response deleted'] , 200, []);
    }
}
