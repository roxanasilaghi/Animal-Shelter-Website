<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'adapost';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if (!isset($_POST['username'], $_POST['password'])) {
    exit('Completati username si password !');
}

if ($stmt = $con->prepare('SELECT user_id, user_pass FROM utilizatori WHERE user_username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $user_pass);
        $stmt->fetch();
        if (password_verify($_POST['password'], $user_pass)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $user_id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
            header('Location: pagina-acasa1.html');
        } else {
            echo 'Incorrect username sau password! (user)';
        }
    } else {
        $stmt->close();
        $stmt = $con->prepare('SELECT admin_id, admin_pass FROM admin WHERE admin_username = ?');
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($admin_id, $admin_pass);
            $stmt->fetch();
            if (password_verify($_POST['password'], password_hash($admin_pass, PASSWORD_DEFAULT))) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $admin_id;
                echo 'Welcome ' . $_SESSION['name'] . '!';
                header('Location: index-admin.php');
            } else {
                echo 'Incorrect username sau password! (admin)';
            }
        } else {
            echo 'Incorrect username sau password! (user)';
        }
    }
    $stmt->close();
}


?>