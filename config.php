<?php
    $connection = mysqli_connect(
        "localhost",
        "root",
        "",
        "openhouse"
    );

    if(!$connection) {
        die("Error: " . mysqli_connect_error());
    } else {
       // echo "Connection successful";
    }
?>
