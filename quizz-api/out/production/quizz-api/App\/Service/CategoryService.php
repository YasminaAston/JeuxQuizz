<?php
namespace App\Service;

use App\Entity\Category;

interface CategoryService {

    public function get(int $id):Category;
    public function getAll():array;
    public function add(Category $category):Category;
    public function update(Category $category, int $id):Category;
    public function delete(int $id):void;


}
