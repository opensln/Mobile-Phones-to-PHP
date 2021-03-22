
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phones to PHP</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

<!--   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/flipCard.css" />
    <link rel="stylesheet" href="./assets/css/css.css" />

    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png"/>


   

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <style>
    </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
          
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3 id="pageLogo"><a class="homeLink" href="./index.php">Mobile Phone Lister</a></h3>
                </div>
                <div class="navbar-collapse collapse">
           
                    <ul class="nav navbar-nav" style="color:white;float:right;">
                        <li><a class="" href="./index.php">Home</a></li>

                    <?php if (isset($_SESSION['id'])):?>
                        <li id="userBoxContainer"><a id="userNameBox" class="userNameBox"><?php echo "Hello " .  $_SESSION['username'] . "!"; ?></a></li>
                        <li><a id="" href="<?php echo './logout.php' ?>">Log out</a></li>
                    <?php else: ?>
                        <li><a class="" href="./loginform.php">Log in/Register</a></li>
                    <?php endif; ?>

                    </ul>
                    <span style="color:white;"></span>
                </div>
            </div>
        </div>
        <div class="container">
<!-- 
        &_SESSION['username'];  -->