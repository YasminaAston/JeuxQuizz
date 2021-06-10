<?php

namespace App\Controller;

use App\Entity\Score;
use App\Entity\User;
use App\Form\ScoreType;
use App\Repository\RoleRepository;
use App\Repository\ScoreRepository;
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
 * @Route("/score")
 */
class ScoreController extends AbstractController
{

    protected ScoreRepository $scoreRepository;

    /**
     * ScoreController constructor.
     * @param ScoreRepository $scoreRepository
     */
    public function __construct(ScoreRepository $scoreRepository)
    {
        $this->scoreRepository = $scoreRepository;
    }


    /**
     * @Route("/", name="score_index", methods={"GET"})
     */
    public function getAll(): Response
    {
        $score = $this->scoreRepository->findAll();
        if (sizeof($score) > 0){
            return $this -> json($score, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity score is empty'], 200);
        }
    }

    /**
     * @Route("/new", name="score_new", methods={"POST"})
     */
    public function new(
                        Request $request,
                        SerializerInterface $serializer,
                        ValidatorInterface $validator,
                        RoleRepository $roleRepository
                       ): Response
    {
        // deserialize the json
        try {
            $score = $serializer->deserialize($request->getContent(), Score::class, 'json');
        } catch (NotEncodableValueException $exception) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Invalid Json');
        }
        $errors = $validator->validate($score);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return new JsonResponse($json, Response::HTTP_BAD_REQUEST, [], true);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($score);
        $entityManager->flush();
        return $this -> json($score, 201);
    }

    /**
     * @Route("/{id}", name="score_show", methods={"GET"})
     */
    public function show(int $id): Response
    {
        $score = $this-> scoreRepository ->find($id);
        if(!$score){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Not found '] , 404, []);
        }
        return  $this->json($score);
    }

    /**
     * @Route("/{id}/edit", name="score_edit", methods={"GET","POST"})
     */
    public function edit(
                         Request $request,
                         SerializerInterface $serializer,
                         ValidatorInterface $validator,
                         int $id
                        ): Response
    {
        $score = $this->scoreRepository->find($id);
        if (!$score) {
            return $this->json(['status' => Response::HTTP_NOT_FOUND, 'message' => 'Score not found '], 404, []);
        }
        // deserialize the json
        try {
            $scoreData = $serializer->deserialize($request->getContent(), Score::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this->json(['status' => Response::HTTP_BAD_REQUEST, 'message' => 'Bad request '], 400, []);
        }

        $score->setScore($scoreData->getScore());
        $entityManager = $this->getDoctrine()->getManager();
        try {
            $entityManager->merge($score);
            $entityManager->flush();
            return $this->json($score, 200);
        } catch (\Exception $e) {
            return $this->json(['status' => Response::HTTP_BAD_REQUEST, 'message' => $e->getMessage()], 400, []);
        }
    }

    /**
     * @Route("/{id}", name="score_delete", methods={"DELETE"})
     */
    public function delete(int $id): Response
    {
        $score = $this->scoreRepository->find($id);
        if (!$score) {
            return json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Score not found '] , 404, []);
        }
        $entityManager = $this-> getDoctrine()->getManager();
        $entityManager->remove($score);
        $entityManager->flush();
        return $this-> json(['status'=> Response::HTTP_OK, 'message'=> 'Score deleted'] , 200, []);
    }


}
