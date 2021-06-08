<?php


namespace App\Tests;


use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserServiceTest extends KernelTestCase
{

    private $userService;


    public function setUp() : void
    {
        self::bootKernel();
        $this -> userService = self::$container->get('App\Service\UserService');
    }


    /** @test */
    public function getAllTest() {

        $users = $this -> userService -> getAll();
        $this->assertEquals(2, sizeof($users));
    }
}