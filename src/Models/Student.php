<?php

namespace App\Models;

class Student
{
    public function get()
    {
        $pdo = new \PDO(
            "mysql:host=localhost:3306;dbname=new project",
            'root',
            null
        );
        $sm = $pdo->prepare("SELECT * FROM students");
        $sm->execute();

        return $sm->fetchAll(\PDO::FETCH_ASSOC);
    }
}