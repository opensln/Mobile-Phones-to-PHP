<?php include "./app/controllers/mobilesController.php";?>

<?php 

//$_GET['id'] = 1;

if (isset($_GET['id'])) {

    $item = selectOne('mobiles', ['id' => $_GET['id']]);

  //  logProg($item);
} else {
    //leave placehollders blank
}

?>

<?php include "./app/includes/boilerplate.php";?>


            <form id="createEntry" class="editForm" name="create-phone-entry" action="edit.php" method="post" enctype="multipart/form-data" >


            <h2 class="text-center">Edit Page</h2>
                <div class="form">

            <?php if (!isset($_SESSION['id'])):?>
            <div id="logInToEdit" class="loginToEditWarning">You must be logged in to make changes</div>
            <?php endif; ?>

                <?php include "./app/helpers/formErrors.php"; ?>

                    <hr />
                    <div  class="form-group" style="display:none;">
                        <label>Item id</label>
                        <input type="hidden" name="id" class="" value="<?php echo $item['id'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" name="brand" class="" value="<?php echo $item['brand'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model" class="" value="<?php echo $item['model'] ?>">
                    </div>
    
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="" value="<?php echo $item['price'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Release Year</label>
                        <input type="text" name="release_year" class="" value="<?php echo $item['release_year'] ?>">
                    </div>
                
                    <div class="form-group">
                    <label>Image Upload</label>
                    <input type="file" name="image" value="<?php echo $item['image'] ?>" class="imageInput" >
                    </div>
                
                    <div class="form-group">
                        <label>Front Cam</label>
                        <input type="text" name="FrontCam" class=""  value="<?php echo $item['FrontCam'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Rear Cam</label>
                        <input type="text" name="RearCam" class="" value="<?php echo $item['RearCam'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Tech Spec</label>
                        <input type="text" name="tech_link" class="" value="<?php echo $item['tech_link'] ?>">
                    </div>

                    <div class="form-group text-center">
                            
                    </div>

                    <div class="form-group text-center" >
                    <label></label>
                    <?php if (isset($_SESSION['id'])):?>
                    <button type="submit" name="edit-btn" class="btn btn-success">SUBMIT CHANGES</button>
                    <?php else: ?>
                    <button id="disabledEditButton" type="text" name="disabled-btn" class="btn btn-success disabledEditButton" disabled>SUBMIT CHANGES</button>
                    <?php endif; ?>     
                    <button type="button" onclick="location.href='../phones'" class="btn btn-primary">BACK TO LIST</button>
                    </div>
                </div>
            </form>
</body>
</html>

<script type="text/javascript" src="./assets/js/bootstrap.js"></script>