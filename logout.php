<?php

setcookie("loggedin", "false", time() + 86400, "/");

header("Location: login_page.php");


?>