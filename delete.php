<?php

include "./app/database/db.php"

?>

<?php include("app/includes/boilerplate.php"); ?>

<?php include("app/includes/boilerplate.php"); ?>

<div class="container">

    <h2>Delete</h2>
    <h2>Are you sure that you want to delete this?</h2>

    <div>
        <h4>Mobiles</h4>
        <hr />

        <dl class="dl-horizontal">
            <dt>
              Model
            </dt>

            <dd>
                <?php echo $requestedInfo['model'] ?>
            </dd>

            <dt>
              Brand
            </dt>

            <dd>
                <?php echo $requestedInfo['brand'] ?>
            </dd>

            <dt>
               Price
            </dt>

            <dd>
                 <?php echo $requestedInfo['price'] ?>
            </dd>

            <dt>
                Release Year
            </dt>

            <dd>
              <?php echo $requestedInfo['release_year'] ?>
            </dd>

            <dt>
               Image
            </dt>

            <dd>
                <a href="./assets/images/<?php echo $requestedInfo['image'] ?> " target="_blank">
                    <img src="./assets/images/<?php echo $requestedInfo['image'] ?>" width="110" style=" display: block; margin-left: auto; margin-right: auto;" />
                </a>
            </dd>

            <dt>
                Front Cam:
            </dt>

            <dd>
                @Html.DisplayFor(model => model.FrontCamMP)
            </dd>

            <dt>
                Rear Cam:
            </dt>

            <dd>
                @Html.DisplayFor(model => model.RearCamMP)
            </dd>

            <dt>

                Tech Spec
            </dt>

            <dd>
                <div class=""><i class="fas fa-info-circle myInfoIcon" style="font-size: 30px;"></i></div><br />
                 <a href="http://<?php echo $requestedInfo['tech_link'] ?>">   <?php echo $requestedInfo['tech_link'] ?>.</a>
            </dd>

        </dl>
    
    </div>
    <p>    
      <button type="button" onclick="location.href='./phones.php'" >BACK TO LIST</button>
    </p>
</div>
</body>

</html>

<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
