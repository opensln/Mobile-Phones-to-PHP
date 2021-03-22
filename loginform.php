<?php include "./app/controllers/usersController.php";?>
<?php include "./app/includes/boilerplate.php";?>

                <form id="loginForm" class="loginForm" name="login-form" action="loginform.php" method="post" enctype="multipart/form-data" >
                    <h2 class="text-center">Log in to your Account</h2>

                    <div class=" form">

                    <?php include "./app/helpers/formErrors.php"; ?>
                        <hr>

                        <div class=" form-group">
                            <label class="loginFormLabel">Username</label>
                            <input type="text" name="username" class="" value=<?php echo $username;?>>
                        </div>

                        <div class="form-group">
                            <label class="registerFormLabel"  >Password</label>
                            <input type="password" name="password" class="" value="">
                        </div>

                        <div class="form-group text-center" >
                        <label></label>
                        <button type="submit" name="login-btn" class="btn btn-success">LOG IN</button>
                        <p class="signupLink"><a style="text-decoration:underline;" href="./register.php">or sign-up</a></p>
                        </div>

                    </div>
                </form>    
</body>

<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
