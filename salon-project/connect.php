<?php 

    $sname = "localhost";
    $username = "root";
    $password = "";

    $db_name = "salon_login";

    $con = mysqli_connect($sname, $username, $password, $db_name);

    if (!$con) {

        echo "Connection failed!";

    }

?>