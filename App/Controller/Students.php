<?php
namespace App\Controller;

use Core\Controller;

class Students extends Controller {
    public function index()
    {
        $this->loadModel('Student');

        $this->render('student');
    }

    public function add()
    {
        $this->render('add_student');
    }

    public function edit()
    {
        $this->loadModel('Student');

        $student = $this->Student->get();
        var_dump($student);

        $this->render('edit_student', array('student' => $student));
    }
}