<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $model = new Product();
        $products = $model->getAll();

        include  VIEW_PATH . '/products/index.view.php';
    }
}