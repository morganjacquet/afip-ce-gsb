<?php
namespace Core;

abstract class Controller {
    public $_prop;

    /**
     * Loader model
     *
     * @param string $model model name to load
     * @return void
     */
    public function loadModel(string $model, array $params = []){
        require_once('../../Model/'.$model.'.php');
        
        $model_path = 'Model\\' . $model; 
        $this->$model = new $model_path($params);
    }

    /**
     * Rednder view
     *
     * @param string $file  file view with html
     * @param array $data   data to send in view
     * @return void
     */
    public function render(string $file, array $data = []){
        extract($data);

        require_once('../../Views/'.$file.'.php');
    }
}