<?php include('../include/header.php'); ?>
<?php
    include('../../database/connectdb.php');
    $sql = "SELECT * FROM admin WHERE name=:name AND pass=:pass";
    $st = $db->prepare($sql);
    $st->execute([
            ":name" => $_POST["uname"],
            ":pass" => $_POST["password"],
    ]);

    if ($row = $st->fetch()) {
        $_SESSION['login'] = true;
        echo $_SESSION['login'];
        header("Location: /php/home.php");
    } else {
        echo "onjust";
    }
?>