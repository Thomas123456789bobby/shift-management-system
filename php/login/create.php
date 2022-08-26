<?php include('../include/header.php'); ?>
<?php
    include('../../database/connectdb.php');
    $uname = $_POST["name"];
    $pass = $_POST["password"];
    $mail = $_POST["email"];
    $sql = "INSERT INTO admin (name, pass, email) VALUES (:name, :pass, :email)";
    $st = $db->prepare($sql);
    $st->execute([
            ":name" => $uname,
            ":pass" => $pass,
            ":email" => $mail,
    ]);
    header("Location: /index.php");

?>

