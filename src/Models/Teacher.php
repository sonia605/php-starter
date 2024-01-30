<?php

namespace App\Models;

class Teacher
{
    public static function save($attributes)
    {
    }
    public function get()
    {
        return [
            [
                "name" => "Hasan",
                "gender" => "male",
                "age" => 24
            ],
            [
                "name" => "Sozib",
                "gender" => "male",
                "age" => 26
            ]
        ];
    }
}