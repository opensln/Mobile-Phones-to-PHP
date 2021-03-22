<?php include "./app/database/db.php"; ?>
<?php include "./app/includes/boilerplate.php"; ?>

<?php $requestedInfo = selectAll('mobiles', $conditionsData =[]); ?>
<?php include "./app/includes/messages.php"; ?>

<div id="mobilesBanner"></div>

<div id="buttonContainer" style="position:relative;">
<a href="./create.php"><button class="btn btn-primary createEntryButton" style="">Create New Entry</button></a>
</div>

<table id="myTable" class="table table-striped" style="text-align:center;border:solid black 1px;">

    <colgroup>
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 40%;">
    </colgroup>

    <thead>
        <tr>
            <th>
                Brand
            </th>
            <th>
                Model
            </th>
            <th>
                Price
            </th>
            <th>
                Release Year
            </th>
            <th>
                Image
            </th>
            <th>
                Tech Spec
            </th>
            <th>
                Controls
            </th>
        </tr>
    </thead>

    <tbody>

<?php foreach ($requestedInfo as $item): ?>

    <?php if(empty($item['image'])) {
        $item['image'] = 'holder.jpg'; 
    }
    ?>
        <tr>
            <td>
                <?php echo $item['brand'] ?>
            </td>
            <td>
                <?php echo $item['model'] ?>
            </td>
            <td>
                £<?php echo $item['price'] ?>
            </td>
            <td>
                <?php echo $item['release_year'] ?>
            </td>
            <td height="110px;">
                <!----------------------------flipcard--------------------------->

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">

                            <img src="./assets/images/<?php echo $item['image'] ?>" width="110" style=" display: block; margin-left: auto; margin-right: auto;" />

                        </div>
                        <div class="flip-card-back" style="">
                            <p>Front Cam:</p>
                            <p><?php echo $item['FrontCam'] ?></p>
                            <h5>Rear Cam:</h5>
                            <p><?php echo $item['RearCam'] ?></p>
                        </div>
                    </div>
                </div>

                <!---------------------------End flipcard--------------------------->
            </td>
           
            <td class="wrappable">
                <div class=""><i class="fas fa-info-circle myInfoIcon" style="font-size: 30px;"></i></div><br />
                <a href="http://<?php echo $item['tech_link'] ?>">   <?php echo $item['tech_link'] ?>.</a>
            </td>
            <td>

            <a class="btn btn-primary" href="./details.php?id=<?php echo $item['id'] ?>"><i class="fas fa-list"></i> Details</a>
            <a class="btn btn-warning showEditWarning" href="./edit.php?id=<?php echo $item['id'] ?>"><i class="far fa-edit"></i> Edit</a>
            <a class="btn btn-danger" onclick="alert('Deletion is disabled for now')"><i class="far fa-trash-alt"></i> Delete</a>
 
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

            <hr />
            <footer>
                <p>&copy; 2021 - DanielSmithLDN</p>
                <p><strong>Note: The figures in this site are not accurate and have been used for testing purposes.<strong></p>
            </footer>
        </div>
        </div>

</body>
</html>

<script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
</script>

<script type="text/javascript" src="./assets/js/bootstrap.js"></script>

