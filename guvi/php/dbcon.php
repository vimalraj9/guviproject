<?php
// $servername = "localhost";
// $db_name = "guvi";
// $username = "root";
// $password = "";

define('DB_USER', "root"); // db user
define('DB_PASSWORD', ""); // db password (mention your db
define('DB_DATABASE', "guvi"); // database name
define('DB_SERVER', "localhost"); // db server

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

mysqli_query($con,"CREATE TABLE IF NOT EXISTS `guvi`.`signup` (`fname` VARCHAR(256) NOT NULL,
`lname` VARCHAR(256) NOT NULL, 
`username` VARCHAR(256) NOT NULL,
`email` VARCHAR(256) NOT NULL , 
`pass` VARCHAR(256) NOT NULL , 
`gender` VARCHAR(10) NOT NULL ,
`phone` VARCHAR(25) NOT NULL,
PRIMARY KEY (`email`));");

// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
?>