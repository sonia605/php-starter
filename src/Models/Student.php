<?php

namespace App\Models;

class Student
{
    public function get()
    {
        $host = $_ENV['DB_HOST'];
        $port = $_ENV['DB_PORT'];
        $db = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USERNAME'];

        $pdo = new \PDO(
            "mysql:host={$host}:{$port};dbname={$db}",
            $user,
            null
        );
        $sm = $pdo->prepare("SELECT * FROM students");
        $sm->execute();

        return $sm->fetchAll(\PDO::FETCH_ASSOC);
    }
}