<?php include "./app/controllers/mobilesController.php";?>
<?php include "./app/includes/boilerplate.php";?>

                <form id="createEntry" class="createForm" name="create-phone-entry" action="create.php" method="post" enctype="multipart/form-data" >
                <h2 class="text-center">Create a New Entry</h2>

                    <div class="form">

                    <?php include "./app/helpers/formErrors.php"; ?>

                        <hr />
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" name="brand" class="" value=<?php echo $brand;?>>
                        </div>

                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="model" class="" value=<?php echo $model;?>>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="" value=<?php echo $price;?>>
                        </div>

                        <div class="form-group">
                            <label>Release Year</label>
                            <input type="text" name="release_year" class="" value=<?php echo $release_year;?>>
                        </div>

                        <div class="form-group">
                        <label>Image Upload (upload a sqaure image)</label>
                            <input type="file" name="image" value="holder.jpg" class="imageInput" value=<?php echo $image;?>>
                        </div>

                        <div class="form-group">
                            <label>Front Cam</label>
                            <input type="text" name="FrontCam" class="" value=<?php echo $FrontCam;?>>
                        </div>

                        <div class="form-group">
                            <label>Rear Cam</label>
                            <input type="text" name="RearCam" class="" value=<?php echo $RearCam;?>>
                        </div>

                        <div class="form-group">
                            <label>Tech Spec</label>
                            <input type="text" name="tech_link" class="" value=<?php echo $tech_link;?>>
                        </div>

                        <div class="form-group text-center">
                              
                        </div>

                        <div class="form-group text-center" >
                        <label></label>
                        <button type="submit" name="create-btn" class="btn btn-success">SUBMIT ENTRY</button>
                        <button type="button" onclick="location.href='../phones'" class="btn btn-primary">BACK TO LIST</button>
                        </div>
                    </div>
                </form>
</body>
</html>

<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
