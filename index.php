<?php

require_once 'db.php';
$db = new DB();

require_once 'model/model.php';
$model = new Model($db);


if (!empty($_POST)) {
    require_once 'action/action.php';
    $action = new Action($model);
    $action->init();
} else {
    $contacts = $model->get_contacts();
    require_once('view/view.php');
}

