<?php
//Connection
$host = "localhost";
$user  = "root";
$password = "";
$dbname = "sg";
//Set DSN
$dsn = "mysql:host=".$host.";dbname=".$dbname;
//Create PDO Instance
$con = new PDO($dsn , $user , $password);
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_OBJ);

//Get First Project
$stmt = 'SELECT * FROM projects WHERE id = ?';
$DBCall = $con->prepare($stmt);
$DBCall->execute([1]);
$Project = $DBCall->fetch();
echo $Project->title;
?>
