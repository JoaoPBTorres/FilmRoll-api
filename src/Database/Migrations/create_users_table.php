<?php

require_once __DIR__ . '/../Connection.php';

$pdo = Connection::get();

$sql = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
";

$pdo->exec($sql);

echo 'Tabela users criada com sucesso.' . PHP_EOL;
