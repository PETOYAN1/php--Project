<?php 
    include('../db_connect.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `admin` WHERE ID = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: ../../index.php?msg=Deleted Successfully');
    } else {
        echo 'Failed' . mysqli_error($conn);
    }
?>