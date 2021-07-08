<?php


namespace App\Service;



use App\Entity\User;

interface UserService
{

    public function signUp(User $user): User;
    public function login(string $email, string $password): User;
    public function getAll(): array;
}