<?php


namespace App\Tests;


use App\dto\UserDto;
use App\Entity\User;
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
        $user = $this -> userService -> login("13@gmail.com", "abcd");
        if ($user != null){
            $login = true;
        }
        $this->assertTrue(true, $login);
    }

    /** @test */
    public function signUpTest() {
        $signup = false;
        $user = new User();
        $user ->setEmail("13@gmail.com");
        $user -> setMotPasse("abcd");
        $user -> setNom("abcd");
        $user -> setPrenom("abcd");
        $user -> setAge(27);

        $user = $this -> userService -> signUp($user);
        if ($user != null){
            $signup = true;
        }
        $this->assertTrue(true, $signup);
    }
}