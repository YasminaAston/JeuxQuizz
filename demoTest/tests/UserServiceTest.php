<?php


namespace App\Tests;


use App\dto\UserDto;
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
        $this->assertEquals(4, sizeof($users));
    }

    /** @test */
    public function loginTest() {
        $login = false;
        $user = new UserDto();
        $user ->setEmail("13@gmail.com");
        $user -> setPassword("abcd");
        $user2 = $this -> userService -> login($user ->getEmail(), $user ->getPassword());
        if ($user2 != null){
            $login = true;
        }
        $this->assertEquals(true, $login);
    }
}