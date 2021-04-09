<?php

namespace App\Service;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;

class CategoryServiceImpl implements CategoryService

protected Ca
{
       public function get(int $id): Response
    {
        $category = $this-> categoryRepository ->find($id);
        if(!$category){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Not found '] , 404, []);
        }
        return  $this->json($category);
    }
	
{ 