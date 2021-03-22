<?php include "./app/database/db.php";?>

<?php

if (isset($_GET['id'])) {

    $requestedInfo = selectOne('mobiles', ['id' => $_GET['id']]);
}
?>

<?php include "app/includes/boilerplate.php";?>

        <div class="detailsPanel dl-horizontal" style="border:solid black 1px;text-align:center;">
            <div class=" form-group">
                <label class="detailsLabel"></label>
                <h2 class="text-center">Details</h2>
            </div>

            <div class=" form-group">
                <label class="detailsLabel">Model:</label>
                <?php echo $requestedInfo['model'] ?>
            </div>

            <div class=" form-group">
                <label class="detailsLabel">Brand:</label>
                <?php echo $requestedInfo['brand'] ?>
            </div>

            <div class=" form-group">
                <label class="detailsLabel">Price:</label>
                <?php echo "£" . $requestedInfo['price'] ?>
            </div>

            <div class=" form-group">
                <label class="detailsLabel">Release Year:</label>
                <?php echo $requestedInfo['release_year'] ?>
            </div>

            <div class=" form-group">
                <label class="detailsLabel" style="margin-bottom:5px;">Image:</label>
                <a href="./assets/images/<?php echo $requestedInfo['image'] ?> " target="_blank">
                <img src="./assets/images/<?php echo $requestedInfo['image'] ?>" width="110" style="display:block;margin: 5px auto 0 auto;" /></a>
            </div>

            <div class=" form-group">
                <label class="detailsLabel">Front Cam:</label>
                <?php echo $requestedInfo['FrontCam'] ?>
            </div>
            <div class=" form-group">
                <label class="detailsLabel">Rear Cam:</label>
                <?php echo $requestedInfo['RearCam'] ?>
            </div>

            <div class=" form-group">
                <label class="detailsLabel">Tech Spec:</label>
                <div class=""><i class="fas fa-info-circle myInfoIcon" style="font-size: 30px;"></i></div>
                <a href="http://<?php echo $requestedInfo['tech_link'] ?>">   <?php echo $requestedInfo['tech_link'] ?>.</a>
            </div>

                <div style="border:none;">
                    <button class="detailsPageButton btn btn-success" type="button" onclick="location.href='../phones/edit.php?id=<?php echo $requestedInfo['id'] ?>'" >EDIT</button>
                    <button class="detailsPageButton btn btn-primary" type="button" onclick="location.href='../phones'" >BACK TO LIST</button>
                </div>
        </div>

    <div class="text-center">

    </div>
</body>
</html>

<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
