<?php

//---validate---registration---

function validateReg($regInfo) {

    $errors = array();

 if (empty($regInfo['username'])) {
     array_push($errors, 'Username is required.');
 }

if (empty($regInfo['email'])) {
    array_push($errors, 'Email is required.');
}

if (empty($regInfo['password'])) {
    array_push($errors, 'Password is required.');
}

if ($regInfo['passwordConf'] !== $regInfo['password']) {
    array_push($errors, 'You must enter a matching password.');
}

 $existingUser = selectOne('userstable', ['email' => $regInfo['email']]);

if(isset($existingUser)) {
    array_push($errors , 'Email already exists');
}

return $errors;
}

//---validate---login---

function validateLogin($loginInfo) {

    $errors = array();

 if (empty($loginInfo['username'])) {
     array_push($errors, 'Username is required.');
 }

if (empty($loginInfo['password'])) {
    array_push($errors, 'Password is required.');
}

return $errors;
}

//---validate---Create---

function validateCreate($regInfo) {

    $errors = array();

 if (empty($regInfo['model'])) {
     array_push($errors, 'Model is required.');
 }

if (empty($regInfo['brand'])) {
    array_push($errors, 'Brand is required.');
}

if (empty($regInfo['price'])) {
    array_push($errors, 'Price is required.');
}

if (empty($regInfo['release_year'])) {
    array_push($errors, 'Release year is required.');
}

//---image validated in the controller

if (empty($regInfo['FrontCam'])) {
    array_push($errors, 'Front Cam spec is required.');
}

if (empty($regInfo['RearCam'])) {
    array_push($errors, 'Rear Cam spec is required.');
}

if (empty($regInfo['tech_link'])) {
    array_push($errors, 'Tech spec link is required.');
}

return $errors;
}

//---validate---update/edit---

function validateEdit($regInfo) {

    $errors = array();

 if (empty($regInfo['model'])) {
     array_push($errors, 'Model is required.');
 }

if (empty($regInfo['brand'])) {
    array_push($errors, 'Brand is required.');
}

if (empty($regInfo['price'])) {
    array_push($errors, 'Price is required.');
}

if (empty($regInfo['release_year'])) {
    array_push($errors, 'Release year is required.');
}

//---image validated in the controller

if (empty($regInfo['FrontCam'])) {
    array_push($errors, 'Front Cam spec is required.');
}

if (empty($regInfo['RearCam'])) {
    array_push($errors, 'Rear Cam spec is required.');
}

if (empty($regInfo['tech_link'])) {
    array_push($errors, 'Tech spec link is required.');
}

return $errors;
}























?>

