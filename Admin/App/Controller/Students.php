<?php
namespace Admin\App\Controller;

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

    public function edit($id)
    {
        $this->loadModel('Student', array('id' => intval($id)));

        $student = $this->Student->get();

        if (!empty($student)) {
            $this->render('edit_student', array('student' => $student));
        } else {
            header('Location: ' . PROJECT_PATH);
        }
    }
}