<?php


namespace App\Service;


use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;

class UserServiceImpl implements UserService
{

    protected UserRepository $userRepository;
    private $entityManager;
    /**
     * UserServiceImpl constructor.
     * @param UserRepository $userRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
    }


    public function signUp(User $user): User
    {
        $this-> entityManager->persist($user);
        $this-> entityManager->flush();
        return $user;
    }

    public function login(string $email, string $password): User
    {
        $user = $this ->userRepository.findOneBy(array('email' =>$email));
        if(user != null){
            if (user.getMotPasse().equals(password)){
                return $user;
            }
        }
        return $user;
    }

    public function getAll(): array
    {
        return $this ->userRepository ->findAll();
    }
}