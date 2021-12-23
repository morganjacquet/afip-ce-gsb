<?php
namespace App\Controller;

use Core\Controller;

class Nationalities extends Controller {
    public function ajaxGetList()
    {
        $this->render('add_student');
    }
}