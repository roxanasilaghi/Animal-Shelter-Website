<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'testare';

$mysqli = new mysqli($hostname, $username, $password,$db);

if(!mysqli_connect_errno())
{
//echo 'Connectat la baza de date: '. $db;
//$mysqli->close();
}
else
{
echo 'Nu se poate connecta';
exit();
}
?>