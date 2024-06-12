<?php
class Controller {
    public function model($model) {
        $modelFile = $_SERVER['DOCUMENT_ROOT'] . '/projectPTIT/' . 'MVC/models/' . $model . '.php';
        if (file_exists($modelFile)) {
            require_once $modelFile;
            if (class_exists($model)) {
                return new $model;
            } else {
                throw new Exception('Class ' . $model . ' not found in ' . $modelFile);
            }
        } else {
            throw new Exception('Model file ' . $modelFile . ' not found');
        }
    }

    public function view($view, $data = []) {
        $viewFile = $_SERVER['DOCUMENT_ROOT'] . '/projectPTIT/' . "MVC/views/" . $view . ".php";
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            throw new Exception('View file ' . $viewFile . ' not found');
        }
    }
}
?>
