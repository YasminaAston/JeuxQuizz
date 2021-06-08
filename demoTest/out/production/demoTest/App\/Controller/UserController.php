<?php


namespace App\Controller;


use App\Dto\QuizzDto;
use App\dto\UserDto;
use App\Entity\User;
use App\Service\UserService;
use http\Client\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/")
 */
class UserController extends AbstractController
{

    protected UserService  $userService;

    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    /**
     * @Route("/users", name="users", methods={"GET"})
     */
    public function getAll(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $users = $this -> userService -> getAll();
        if (sizeof($users) > 0){
            return $this -> json($users, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity user is empty'], 200);
        }
    }


    /**
     * @Route("/signup", name="users", methods={"POST"})
     */
    public function signUp(Request $request, SerializerInterface $serializer): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // deserialize the json
        try {
            $user = $serializer->deserialize($request->getContent(), User::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $user = $this -> userService -> signUp($user);
            return $this -> json($user, 200);
    }

    /**
     * @Route("/login", name="users", methods={"POST"})
     */
    public function login(Request $request, SerializerInterface $serializer): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // deserialize the json
        try {
            $user = $serializer->deserialize($request->getContent(), UserDto::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $user = $this -> userService -> login($user-> getEmail(), $user -> getMotPasse());
        return $this -> json($user, 200);
    }
}