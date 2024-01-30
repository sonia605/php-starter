<?php

namespace App\Models;

class Product
{
    public function getAll()
    {
        return [
            [
                "name" => "Baby soup",
                "price" => 50
            ],
            [
                "name" => "Adult soup",
                "price" => 100
            ]
        ];
    }
}