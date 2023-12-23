<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'tutorial';

    $conn = mysqli_connect($server, $username, $password, $db);

    if (!$conn) {
        die('Failed DB ' . mysqli_connect_error());
    } else {
        // echo "Successfully";
    }
?>
