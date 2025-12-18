<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryInterface;
use App\Database\Connection;
use App\Entities\User;
use PDO;

final class UserRepository implements UserRepositoryInterface
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Connection::get();
    }
    
    public function findByEmail(string $email): ?User
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM users WHERE email = :email LIMIT 1'
        );

        $stmt->execute([
            'email' => $email
        ]);

        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        return $this->mapToUser($data);
    }

    public function findById(int $id): ?User
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM users WHERE id = :id LIMIT 1'
        );

        $stmt->execute([
            'id' => $id
        ]);

        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        return $this->mapToUser($data);
    }

    public function create(User $user): User
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO users (name, email, password, created_at)
            VALUES (:name, :email, :password, :created_at)'
        );

        $stmt->execute([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'created_at' => $user->getCreatedAt()->format('Y-m-d H:i:s'),
        ]);

        $id = (int) $this->pdo->lastInsertId();

        return new User(
            $id,
            $user->getName(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getCreatedAt()
        );
    }

    private function mapToUser(array $data): User
    {
        return new User(
            (int) $data['id'],
            $data['name'],
            $data['email'],
            $data['password'],
            new \DateTimeImmutable($data['created_at'])
        );
    }
}