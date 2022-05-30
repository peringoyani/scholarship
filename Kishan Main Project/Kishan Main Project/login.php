<?php

$login = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $nameOrEmail = $_REQUEST['emailOrUser']; 
    $pass = $_REQUEST['password'];

    $query = "select * from users";
    $result = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_assoc($result)) {
        if ($nameOrEmail == $data['username'] || $nameOrEmail == $data['email']) {
            if (password_verify($pass, $data['password'])) {
                $login = true;
                setcookie("loggedin", "true", time() + 86400, "/");
                // session_start();
                // $_SESSION['loggedin'] = true;
                // $_SESSION['nameOrEmail'] = $nameOrEmail;
            }
            else {
                $showError = true;
            }
        }
        else {
            $showError = true;
        }
    }
    if ($login) {
        header("Location: home.php");
    }
}

?>
