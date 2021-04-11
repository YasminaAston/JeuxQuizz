<?php


namespace App\Service;


use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class CategoryServiceImpl implements CategoryService
{

    protected CategoryRepository $categoryRepository;
    protected EntityManagerInterface $entityManager;

    /**
     * CategoryServiceImpl constructor.
     * @param CategoryRepository $categoryRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(CategoryRepository $categoryRepository, EntityManagerInterface $entityManager)
    {
        $this->categoryRepository = $categoryRepository;
        $this->entityManager = $entityManager;
    }


    public function get(int $id): Category
    {
        return $this-> categoryRepository ->find($id);
    }

    public function getAll(): array
    {
       return $this->categoryRepository->findAll();
    }

    public function add(Category $category): Category
    {
        // TODO: Implement add() method.
    }

    public function update(Category $category, int $id): Category
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}