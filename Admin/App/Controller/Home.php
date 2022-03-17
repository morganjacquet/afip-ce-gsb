<?php
namespace Admin\App\Controller;

use Core\Controller;

class Home extends Controller {
    public function index()
    {
        $this->loadModel('Student');

        $students = $this->Student->getList();
        $this->render('home', array('students' => $students));
    }
}