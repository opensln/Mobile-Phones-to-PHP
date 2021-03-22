<?php

include './app/database/db.php';
include './app/helpers/validateforms.php';

$errors = array();
$_SESSION;

$username = '';
$email = '';
$password = '';
$passwordConf = '';

if (isset($_POST['register-btn'])) {

    $errors = validateReg($_POST);

    if (count($errors) === 0) {

        unset($_POST['register-btn']);
        unset($_POST['passwordConf']);
        $_POST['admin'] = 1;

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $NewEntryId = create('userstable', $_POST);
        $NewEntry = selectOne('userstable', ['id' => $NewEntryId]);

        //log in user
        $_SESSION['id'] = $NewEntry['id'];
        $_SESSION['username'] = $NewEntry['username'];
        $_SESSION['admin'] = $NewEntry['admin'];
        $_SESSION['message'] = 'You are currently logged in';
        $_SESSION['type'] = 'success';

        header('location: ../phones');
        exit();
        
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }

}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $currentUser = selectOne('userstable', ['username' => $_POST['username']]);

        if ($currentUser && password_verify($_POST['password'], $currentUser['password'])) {
            //log in user
            $_SESSION['id'] = $currentUser['id'];
            $_SESSION['username'] = $currentUser['username'];
            $_SESSION['admin'] = $currentUser['admin'];
            $_SESSION['message'] = 'You are currently logged in';
            $_SESSION['type'] = 'success';

            header('location: ../phones');
            exit();
            
        } else {
            array_push($errors, 'Your login details are incorrect!');
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
}
