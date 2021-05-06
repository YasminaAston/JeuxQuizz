<?php

namespace App\Controller;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use ApiPlatform\Core\Exception\ExceptionInterface;
use App\Service\CategoryService;
use Doctrine\ORM\EntityManagerInterface;
use http\Exception\BadMessageException;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/category")
 */
class CategoryController extends AbstractController
{

    protected CategoryService $categoryService;
     protected CategoryRepository $categoryRepository;
     protected EntityManagerInterface $entityManager;

    /**
     * CategoryController constructor.
     * @param CategoryService $categoryService
     * @param CategoryRepository $categoryRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(CategoryService $categoryService, CategoryRepository $categoryRepository, EntityManagerInterface $entityManager)
    {
        $this->categoryService = $categoryService;
        $this->categoryRepository = $categoryRepository;
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/{id}", name="category_show", methods={"GET"})
     */
    public function show(int $id): Response
    {
        $category = $this-> categoryService ->get($id);
        if(!$category){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Not found '] , 404, []);
        }
        return  $this->json($category);
    }

    /**
     *
     * @Route("/", name="get_categories", methods={"GET"})
     */
    public function getAll(CategoryRepository $categoryRepository): Response
    {
        $category = $this->categoryService ->getAll();
        if (sizeof($category) > 0){
            return $this -> json($category, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity Category is empty'], 200);
        }
    }

    /**
     *
     * @Route("/add", name="category_new", methods={"POST"})
     */
    public function new(
                        Request $request,
                        SerializerInterface $serializer,
                        ValidatorInterface $validator
                        ): Response
    {

        // deserialize the json
        try {
            $category = $serializer->deserialize($request->getContent(), Category::class, 'json');
        } catch (NotEncodableValueException $exception) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Invalid Json');
        }
        $errors = $validator->validate($category);

        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return new JsonResponse($json, Response::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();
        return new Response( $this -> json($category, 201));

    }

    /**
     * @Route("/{id}/edit", name="category_edit", methods={"PUT"})
     */
    public function edit( Request $request,
                          SerializerInterface $serializer,
                          ValidatorInterface $validator,
                          int $id): Response
    {
        $category = $this-> categoryRepository ->find($id);
        if (!$category) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Category not found '] , 404, []);
        }
        // deserialize the json
        try {
            $categoryData = $serializer->deserialize($request->getContent(), Category::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $errors = $validator->validate($categoryData);
        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this-> json($json , 400, []);

        }
        $category->setName($categoryData->getName());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();
        return  $this -> json($category, 200);
    }

    /**
     * @Route("/{id}", name="category_delete", methods={"DELETE"})
     */
    public function delete(int $id): Response
    {
        $category = $this-> categoryRepository ->find($id);
        if (!$category) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Category not found '] , 404, []);
        }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();
            return $this-> json(['status'=> Response::HTTP_OK, 'message'=> 'Category deleted'] , 200, []);
    }

}
