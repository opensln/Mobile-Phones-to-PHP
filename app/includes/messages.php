<?php if(isset($_SESSION['message'])): ?>
<div id="userLoggedin" class="msg <?php echo $_SESSION['type']?>">
<?php echo $_SESSION['message']?>
</div>

<?php
unset($_SESSION['message']);
unset($_SESSION['type']);
?>
<?php endif;?>

