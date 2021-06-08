<?php


namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\Category;
use App\Service\CategoryService;
use PHPUnit\Framework\TestCase;

class CategoryServiceTest extends KernelTestCase

{
    private $categoryService;

    public function setUp() : void
    {
        self::bootKernel();
        $this -> categoryService = self::$container->get('App\Service\CategoryService');
    }
    /** @test */
    public function getByNameTest() {

        $name = "JAVA";
        $category = $this -> categoryService -> getByName("Java");
        $this->assertEquals($name, $category->getName());
    }
}