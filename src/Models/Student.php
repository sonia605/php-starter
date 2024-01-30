<?php

namespace App\Models;

class Student
{
    public function get()
    {
        return [
            [
                "name" => "Hasan",
                "age" => 25
            ],
            [
                "name" => "Sozib",
                "age" => 30
            ]
        ];
    }
}