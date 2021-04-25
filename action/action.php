<?php

class Action
{
    public $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function init()
    {
        if (!empty($_POST)) {
            switch ($_POST['action']) {
                case "add" :
                    $this->model->add();
                    break;
                case "delete" :
                    $this->model->delete();
                    break;
            }
        }
    }
}