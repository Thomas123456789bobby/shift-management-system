<?php include('include/header.php'); 
include('../database/connectdb.php');

if ($_SESSION["login"] == true){
    include('include/navbar.php'); 
    $sql = "SELECT * FROM `admin` ORDER BY `name` ASC"; 
    $sth = $db->prepare($sql); 
    $sth->execute();
    ?> <br> <br> <br>
    <table class="table1">
        <tr class="table1">
        <td>name</td>
        <td>email</td>
        <td>pass</td>
        <td>wijzigen</td>
        <td>verwijderen</td>
        </tr> <?php 
    while($row = $sth->fetch()) { ?>
        <div class="row justify-content-center">
        <div class="jumbotron col-xl-4 bericht">
        <tr class="table1">
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td>.......</td>
            <td><form action="/php/login/userwijzigen.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                <input type="submit" class="btn btn-info" name="submit" value="wijzigen">
            </form></td>
            <td><form action="/php/login/userverwijderen.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                <input type="submit" class="btn btn-danger" value="verwijderen">
            </form></td>
            
        </tr>
        </div>
        </div>
    
<?php } ?>
</table>
<br>
<br>
<br>

<form action="/php/login/usercreate.php">
    <input class="btn btn-primary" type="submit" value="neuuw" />
</form>


<?php } else {
    header("Location: /index.php");
}
?>

<?php include('include/footer.php'); ?>