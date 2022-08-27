<?php include('../include/header.php'); ?>
<?php
echo "weet je zeker dat je dezeer wil verwijderen?<br>";?>
<form  action="/php/login/verwijderen.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_POST["id"] ?>">
    <input class="btn btn-info" type="submit" name="submit" value="verwijderen">
</form>
