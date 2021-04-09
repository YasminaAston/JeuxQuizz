<?php
<<<<<<< HEAD

namespace App\Service;


use App\Entity\Category;

interface CategoryService
{
    public function get(int $id):category;
    
    public function getAll():array;

    public function add(Category $category):Category;
    
    public function update(Category $category,int $id):Category;
    
    public function delete(int $id):void;
}
=======
namespace App\Service;

use App\Entity\Category;

interface CategoryService {

    public function get(int $id):Category;
    public function getAll():array;
    public function add(Category $category):Category;
    public function update(Category $category, int $id):Category;
    public function delete(int $id):void;


}
>>>>>>> 02bd3902fd4f2f1c551b8206afd34daec3bcab4c
