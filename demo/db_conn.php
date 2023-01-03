<?php

    $sname = "localhost";
    $unmae = "root";
    $password = "Bren03270912!";

    $db_name = "test_db";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

    if(!$conn) {
        echo "Connection Failed";
    }