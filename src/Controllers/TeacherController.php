<?php

namespace App\Controllers;

use App\Models\Teacher;

class TeacherController
{
    public function index()
    {
        $model = new Teacher();
        $teachers = $model->get();

        include  VIEW_PATH . '/teachers/index.view.php';
    }

    public function create()
    {
        include VIEW_PATH . '/teachers/create.view.php';
    }

    public function store()
    {
        Teacher::save($_POST);
        header("Location: /teachers");
    }
}