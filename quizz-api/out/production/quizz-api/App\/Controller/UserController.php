<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use http\Message;
use ProxyManager\Exception\ExceptionInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator;
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
 * @Route("/user")
 */
class UserController extends AbstractController
{
    protected UserRepository $userRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function getAll(): Response
    {
        $users = $this->userRepository->findAll();
        if (sizeof($users) > 0){
             return $this -> json($users, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity user is empty'], 200);
        }
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(int $id): Response
    {
        $user = $this-> userRepository ->find($id);
        if(!$user){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'User Not Found '] , 404, []);
        }
        return  $this->json($user);
    }

    /**
     * @Route("/new", name="user_new", methods={"POST"})
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
            $user = $serializer->deserialize($request->getContent(), User::class, 'json');
        } catch (NotEncodableValueException $exception) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Invalid Json');
        }
        $errors = $validator->validate($user);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return new JsonResponse($json, Response::HTTP_BAD_REQUEST, [], true);
        }
        $role = $roleRepository ->findOneBy(array('roleName' => 'ROLE_USER'));
        $user->setRole($role);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        return $this -> json($user, 201);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"PUT"})
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     * @param UniqueEntityValidator $uniqueEntityValidator
     * @param int $id
     * @return Response
     */
    public function edit(
                         Request $request,
                         SerializerInterface $serializer,
                         ValidatorInterface $validator,
                         int $id
                         ): Response
    {
        $user = $this-> userRepository ->find($id);
        if (!$user) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'User not found '] , 404, []);
        }
        // deserialize the json
        try {
            $userData = $serializer->deserialize($request->getContent(), User::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }

        $user->setUsername($userData-> getUsername());
        $user->setEmail($userData->getEmail());
        $user->setFirstname($userData->getFirstname());
        $user->setLastname($userData->getLastname());
        $user->setPassword($userData->getPassword());
        $entityManager = $this->getDoctrine()->getManager();
        try {
            $entityManager->merge($user);
            $entityManager->flush();
            return  $this -> json($user, 200);
        }catch (\Exception $e){
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> $e->getMessage()] , 400, []);

        }



    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(int $id): Response
    {
        $user = $this-> userRepository ->find($id);
        if (!$user) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'User not found '] , 404, []);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
        return $this-> json(['status'=> Response::HTTP_OK, 'message'=> 'User deleted'] , 200, []);
    }
}
