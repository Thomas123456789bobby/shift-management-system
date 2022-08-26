<?php 
$host = 'localhost'; 
$dbname = 'buiten'; 
$username = 'thomas'; 
$password = 'thomas'; 
$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8'; 
$db = new PDO($connectStr, $username, $password); 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
