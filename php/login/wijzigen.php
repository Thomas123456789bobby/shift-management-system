<?php include('../include/header.php'); ?>
<?php include('../../database/connectdb.php'); ?>
<?php
    $email = $_POST["email"];
    $namae = $_POST["name"];
    $pass = $_POST["pass"];
    $id = $_POST["id"];

    $sql = "UPDATE admin SET name = :name, pass = :pass, email = :email WHERE id = :id";
    $st = $db->prepare($sql);
    $st->execute([
            ":name" => $namae,
            ":pass" => $pass,
            ":email" => $email,
            ":id" => $id,
    ]);
    header("Location: /php/werknemers.php");
?>