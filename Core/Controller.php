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
    public function loadModel(string $model){
        require_once('../App/Model/'.$model.'.php');
        
        $model_path = 'App\Model\\' . $model; 
        $this->$model = new $model_path();
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

        require_once('../App/Views/'.$file.'.php');
    }
}