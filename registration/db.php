<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'register');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}

$select_db = mysqli_select_db( $connection, "register");
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>
