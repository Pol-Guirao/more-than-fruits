<?php

class Controller{

    public function model($model) {
        require_once $_SERVER['DOCUMENT_ROOT'].'models/' . $model . '.php';
        return new $model();
    }

    public function viewObject($view) {
        require_once $_SERVER['DOCUMENT_ROOT'].'views/' . $view . '.php';
        return new $view();
    }

    public function view($view, $data = []) {
        if(file_exists('views/' . $view . '.php')) {
            require_once 'views/' . $view . '.php';
        } else {
            die("View does not exists.");
        }
    }
}

?>