<?php 

declare(strict_types=1);

namespace App\Contracts\Repositories;

use App\Entities\User;
interface UserRepositoryInterface
{
    public function findByEmail(string $email): ?User;
    public function findById(int $id): ?User;
    public function create(User $user): User;
}