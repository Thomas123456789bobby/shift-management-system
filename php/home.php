<?php include('include/header.php'); 

if ($_SESSION["login"] == true){
    include('include/navbar.php'); 
} else {
    header("Location: /index.php");
}
?>

<?php include('include/footer.php'); ?>