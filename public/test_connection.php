<?php

require_once __DIR__ . '/../src/Database/Connection.php';

try {
    $pdo = Connection::get();
    echo 'Conexão com o banco realizada com sucesso!';
} catch (PDOException $e) {
    echo 'Erro na conexão: ' . $e->getMessage();
}
