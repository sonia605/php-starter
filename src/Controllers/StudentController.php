<?php

namespace App\Controllers;


use App\Models\Student;

class StudentController
{
    public function index()
    {
        $model = new Student();
        $students = $model->get();

        include  VIEW_PATH . '/students/index.view.php';
//        include  'E:\web project\xampp\htdocs\boilerplate\src\Views\students\index.view.php';

    }
}