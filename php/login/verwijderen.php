<?php include('../include/header.php'); ?>
<?php include('../../database/connectdb.php'); ?>
<?php
$id = $_POST["id"]; 
$sql = "DELETE FROM admin WHERE id = :id";
$st = $db->prepare($sql);
$st->execute([
        ":id" => $id,
]);
header("Location: /php/werknemers.php");