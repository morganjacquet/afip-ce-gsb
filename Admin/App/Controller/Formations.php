<?php
namespace Admin\App\Controller;

use Core\Controller;

class Formations extends Controller {
    /**
     * Get list formations json for select2
     *
     * @return void
     */
    public function ajaxGetList()
    {
        $this->loadModel('Formation');
        $formations = $this->Formation->getList();

        foreach ($formations as $value_formations) {
            $formations_datas = array();
            foreach ($value_formations as $key => $value_formation) {
                if (!is_int($key)) {
                    $formations_datas[$key] = $value_formation;
                }
            }
            $result[] = $formations_datas;
        }

        $this->render('json_success', array('status' => 'success', 'datas' => $result, 'message' => ''));
    }
}