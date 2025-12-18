<?php

declare(strict_types=1);

namespace App\Contracts\Services;

use App\Entities\User;
interface AuthServiceInterface
{
    public function register(array $data): User;
    public function login(string $email, string $password): User;
}