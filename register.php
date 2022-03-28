<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = "";
$DATABASE_NAME = 'adapost';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) 
{
	exit('Nu se poate conecta la MySQL: ' . mysqli_connect_error());
}



if ($stmt = $con->prepare('SELECT user_id, user_pass FROM utilizatori WHERE user_username = ?')) 
{
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
    if ($stmt->num_rows > 0) 
    {
        echo 'Username exists, alegeti altul!';
	} 
    else 
    {
		if ($stmt = $con->prepare('INSERT INTO utilizatori (user_username, user_pass, user_email, user_telefon, user_adresa, user_oras, user_tara) VALUES (?, ?, ?, ?, ?, ?, ?)')) 
        {
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('sssssss', $_POST['username'], $password, $_POST['email'], $_POST['telefon'], $_POST['adresa'], $_POST['oras'], $_POST['tara']);
			$stmt->execute();
			echo 'Success inregistrat!';
			header('Location: pagina-acasa.php');
        } 
        else 
        {
			echo 'Nu se poate face prepare statement!';
		}
	}
	$stmt->close();
} 
else
{
    echo 'Nu se poate face prepare statement!';
}
$con->close();
