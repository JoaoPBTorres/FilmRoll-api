<?php

require_once __DIR__ . '/../Connection.php';

$pdo = Connection::get();

$sql = "
CREATE TABLE IF NOT EXISTS user_movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    movie_external_id INT NOT NULL,
    status ENUM('TO_WATCH', 'WATCHED') NOT NULL DEFAULT 'TO_WATCH',
    rating TINYINT NULL,
    review TEXT NULL,
    watched_at DATETIME NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_user_movies_user
        FOREIGN KEY (user_id) REFERENCES users(id)
        ON DELETE CASCADE,

    CONSTRAINT unique_user_movie
        UNIQUE (user_id, movie_external_id)
);
";

$pdo->exec($sql);

echo 'Tabela user_movies criada com sucesso.' . PHP_EOL;
