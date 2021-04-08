<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Role;
use App\Form\RoleType;
use App\Repository\GameRepository;
use App\Repository\RoleRepository;
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
 * @Route("/role")
 */
class RoleController extends AbstractController
{

    protected RoleRepository $roleRepository;

    /**
     * RoleController constructor.
     * @param RoleRepository $roleRepository
     */
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }


    /**
     * @Route("/", name="role_index", methods={"GET"})
     */
    public function getAll(): Response
    {
        $roles = $this ->roleRepository->findAll();
        if (sizeof($roles) > 0){
            return $this -> json($roles, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity role is empty'], 200);

        }
    }

    /**
     * @Route("/new", name="role_new", methods={"GET","POST"})
     */
    public function new(
                        Request $request,
                        SerializerInterface $serializer,
                        ValidatorInterface $validator): Response
    {
        // deserialize the json
        try {
            $role = $serializer->deserialize($request->getContent(), Role::class, 'json');
        } catch (NotEncodableValueException $exception) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Invalid Json');
        }

        $roleCheck = $this-> roleRepository ->findOneBy(array('roleName' =>$role-> getRoleName()));
        if($roleCheck){
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Role exist '] , 400, []);
        }
        $errors = $validator->validate($role);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return new JsonResponse($json, Response::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($role);
        $entityManager->flush();
        return $this -> json($role, 201);

    }

    /**
     * @Route("/{id}", name="role_show", methods={"GET"})
     */
    public function show(int $id): Response
    {
        $role = $this-> roleRepository ->find($id);
        if(!$role){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Role Not Found '] , 404, []);
        }
        return  $this->json($role);
    }

    /**
     * @Route("/{id}/edit", name="role_edit", methods={"PUT"})
     */
    public function edit(Request $request,
                         SerializerInterface $serializer,
                         ValidatorInterface $validator,
                         int $id
    ): Response
    {
        $role = $this-> roleRepository ->find($id);
        // deserialize the json
        try {
            $roleData = $serializer->deserialize($request->getContent(), Role::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $errors = $validator->validate($roleData);
        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this-> json($json , 400, []);

        }
        $role->setRoleName($roleData->getRoleName());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($role);
        $entityManager->flush();
        return  $this -> json($role, 200);

    }

    /**
     * @Route("/{id}", name="role_delete", methods={"DELETE"})
     */
    public function delete(int $id): Response
    {
        $role= $this-> roleRepository ->find($id);
        if (!$role) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Role not found '] , 404, []);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($role);
        $entityManager->flush();
        return $this-> json(['status'=> Response::HTTP_OK, 'message'=> 'Role deleted'] , 200, []);
    }
}
