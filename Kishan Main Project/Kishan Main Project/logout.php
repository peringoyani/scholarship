<?php

setcookie("loggedin", "false", time() + 86400, "/");

header("Location: home.php");


?>