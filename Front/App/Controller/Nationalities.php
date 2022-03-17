<?php
namespace Front\App\Controller;

use Core\Controller;

class Nationalities extends Controller {
    /**
     * Get list nationalities json for select2
     *
     * @return void
     */
    public function ajaxGetList()
    {
        $this->loadModel('Nationality');
        $nationalities = $this->Nationality->getList();

        foreach ($nationalities as $value_nationalities) {
            $nationalities_datas = array();
            foreach ($value_nationalities as $key => $value_nationality) {
                if (!is_int($key)) {
                    $nationalities_datas[$key] = $value_nationality;
                }
            }
            $result[] = $nationalities_datas;
        }

        $this->render('json_success', array('status' => 'success', 'datas' => $result, 'message' => ''));
    }
}