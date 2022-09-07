<?php include('include/header.php'); 
include('../database/connectdb.php');

if ($_SESSION["login"] == true){
    include('include/navbar.php'); 
    $dag = $_POST['day'];
    $month = $_POST['month'];
    $yaar = $_POST['year'];
    $datum = $dag . "-" . $month . "-" . $yaar;
    $date = $yaar . "-" . $month . "-" . $dag;
    echo "<h2>".$datum."<h2>";
    ?>
<div class="tablemain">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">datum</th>
                <th scope="col">naam</th>
                <th scope="col">starttijd</th>
                <th scope="col">stoptijd</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $sql = "SELECT * FROM `shifts` WHERE `datum` = '$date'";
            $sth = $db->prepare($sql);
            $sth->execute();
            $sql1 = "SELECT * FROM `admin` ORDER BY `name` ASC";
            $sth1 = $db->prepare($sql1);
            $sth1->execute();
            while($row = $sth->fetch()) { ?>
            <tr>
                <td><?php echo $datum ?></td>
                <td><?php echo $row["naam"]; ?></td>
                <td><?php echo $row["starttijd"]; ?></td>
                <td><?php echo $row["stoptijd"]; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <form method="post" action="/php/rooster.php">
                    <td><input type="date" name="datum" value="<?php echo $date ?>"></td>
                    <td><select name="naam">
                        <?php while($row1 = $sth1->fetch()) { ?>
                            <option value="<?php echo $row1["name"] ?>"><?php echo $row1["name"] ?></option>
                        <?php } ?>
                    </select></td>
                    <td><input type="time" name="starttijd"></td>
                    <td><input type="time" name="stoptijd"></td>
                </form>
            </tr>
        </tbody>
    </table>
</div>
    <?php
   

} else {
    header("Location: /index.php");
}
?>

<?php include('include/footer.php'); ?>