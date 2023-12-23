<?php
    $sql = $sql = "SELECT * FROM `admin`";
    $rs_result = mysqli_query($conn, $sql);
    $total_records = mysqli_num_rows($rs_result);
    $total_pages = ceil($total_records/$num_per_page);
        for($i = 1; $i <= $total_pages; $i++) {
            echo "<a class='btn text-center text-info' href='index.php?page=".$i."'>$i</a>";
        }
?>