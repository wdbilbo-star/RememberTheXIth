<?php

  /* dd(__DIR__.'/config.php');*/
    /*use Core\Database;*/
    require '../Core/Database.php';

    use Core\Validator;

$config = require('../config.php');
    $heading = 'The Members of The Battalion';
    $title = 'The Battalion';
    $config = require base_path('config.php');
    $db = new Database($config['database']);


    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (! Validator::string($_POST['body'], 1,1000)) {
            $errors['body'] = 'A body of not more than 1000 characters is required.';
        }
    }

    if (empty($errors)) {

        $battmembers = $db->query("SELECT * FROM battalion_members where id < 10")->fetchAll();

    }



    view("battalion/members.view.php", [
        'heading' => $heading,
        'title' => $tite,
        'config' => $config,
    ]);

