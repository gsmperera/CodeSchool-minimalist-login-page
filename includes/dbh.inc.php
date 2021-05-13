<?php
    // database connection
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "sample-login";

    //define mysqli connection using above parameters
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if($conn) {
        echo "<p class='php-success'>Database connected!</p>";
    }
?>