<?php include "./app/controllers/usersController.php";?>
<?php include "./app/includes/boilerplate.php";?>

                <form id="createEntry" class="registerForm" name="create-account" action="register.php" method="post" enctype="multipart/form-data" >
                    <h2 class="text-center">Create an Account</h2>

                    <div class=" form">

                    <?php include "./app/helpers/formErrors.php"; ?>
                        <hr>

                        <div class=" form-group">
                            <label class="registerFormLabel">User Name</label>
                            <input type="text" name="username" class="" value=<?php echo $username;?>>
                        </div>

                        <div class="form-group">
                            <label class="registerFormLabel">email</label>
                            <input type="email" name="email" class="" value=<?php echo $email;?>>
                        </div>


                        <div class="form-group">
                            <label class="registerFormLabel"  >Password</label>
                            <input type="password" name="password" class="" value=<?php echo $password;?>>
                        </div>

                        <div class="form-group">
                            <label class="registerFormLabel" >Confirm Your Password</label>
                            <input type="password" name="passwordConf" class="" value=<?php echo $passwordConf;?>>
                        </div>

                        <div class="form-group text-center" >
                        <label></label>
                        <button type="submit" name="register-btn" class="btn btn-success">REGISTER</button>
                        </div>

                    </div>
                </form>    
</body>
