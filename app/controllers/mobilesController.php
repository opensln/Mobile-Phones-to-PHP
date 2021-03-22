<?php
include './app/database/db.php';
include './app/helpers/validateforms.php';

$errors = array();

$model = '';
$brand = '';
$price = '';
$release_year = '';
$image ='';
$FrontCam ='';
$RearCam ='';
$tech_link ='';

if (isset($_POST['create-btn'])) {
    unset($_POST['create-btn']);

    $errors = validateCreate($_POST);

    $jpgCheck = substr($_FILES['image']['name'],-3);

    if ($jpgCheck != "jpg") { 
    array_push($errors, 'You must upload a jpg image file.');

    } else {

    if (!empty($_FILES['image']['name'])) {
          $imagename = time() . '_' . $_FILES['image']['name'];
          $destination = "./assets/images/" . $imagename;

          $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

          if($result) {
            $_POST['image'] = $imagename;
          } else {
            array_push($errors, 'Failed to upload image');
          }

    } else {
      array_push($errors, 'Phone image required');
    }

  }
    if (count($errors) === 0) {

    $user_id = create('mobiles', $_POST);

     $NewEntry = selectOne('mobiles', ['id' => $user_id]); 
     $_SESSION['message'] = 'Your entry was successful.';
     $_SESSION['type'] = 'success';
     header('location: ../phones');
    //logProg($NewEntry);
    } else {

    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $release_year = $_POST['release_year'];
    $image = $_POST['image'];
    $FrontCam = $_POST['FrontCam'];
    $RearCam = $_POST['RearCam'];
    $tech_link = $_POST['tech_link'];
    }
} 

//---end---create---controller

if (isset($_POST['edit-btn'])) {
   unset($_POST['edit-btn']);

  $errors = validateEdit($_POST); //Not much different from Create

  //logProg($errors);

  if (!empty($_FILES['image']['name'])) {

    $jpgCheck = substr($_FILES['image']['name'],-3);

    if ($jpgCheck != "jpg") { 
      array_push($errors, 'You must upload a jpg image file.');
      } else {

    $imagename = time() . '_' . $_FILES['image']['name'];
    $destination = "./assets/images/" . $imagename;
    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

    if($result) {
      $_POST['image'] = $imagename;
      
    } else {
      array_push($errors, 'Failed to upload image');
    }

  }

} else {
// array_push($errors, 'Phone image required'); //If no image provided, old image will be kept
}

if (count($errors) === 0) {

  $stored_id_from_page = ($_POST['id']);
  unset($_POST['id']);

 $updatedEntry_id = update('mobiles', $stored_id_from_page, $_POST);
 $_SESSION['message'] = 'Your update was successful';
 $_SESSION['type'] = 'success';

  header('location: ../phones');
  exit();
 //logProg($updatedEntry);

  } else {
    $item['id'] = $_POST['id'];
    $item['model'] = $_POST['model'];
    $item['brand'] = $_POST['brand'];
    $item['price'] = $_POST['price'];
    $item['release_year'] = $_POST['release_year'];
    $item['image'] = $_FILES['image']['name'];
    $item['FrontCam'] = $_POST['FrontCam'];
    $item['RearCam'] = $_POST['RearCam'];
    $item['tech_link'] = $_POST['tech_link'];
  }
}