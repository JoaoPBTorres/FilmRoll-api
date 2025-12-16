<?php

require_once __DIR__ . '/../Connection.php';

$pdo = Connection::get();

$sql = "
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    movie_external_id INT NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_comments_user
        FOREIGN KEY (user_id) REFERENCES users(id)
        ON DELETE CASCADE
);
";

$pdo->exec($sql);

echo 'Tabela comments criada com sucesso.' . PHP_EOL;
