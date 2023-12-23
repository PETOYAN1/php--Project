<?php
    echo "<a href='index.php?order=asc' class='btn text-muted position-relative text-primary text-decoration-none'>˄</a>
    <a href='index.php?order=desc' class='btn text-success text-decoration-none'>˅</a>";
    $sql = "SELECT * FROM admin ORDER BY ID DESC";
    $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($result)) {
        ?>
             <tr>
             <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?= $row['ID'] ?></h6></td>
             <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1"><?= $row['name'] ?></h6>
                  <span class="fw-normal"><?= $row['dateRegister'] ?></span>                          
             </td>
             <td class="border-bottom-0">
                <p class="mb-0 fw-normal"><?= $row['surname'] ?></p>
             </td>
             <td class="border-bottom-0">
                <p class="fw-semibold mb-0 fs-3"><?= $row['email'] ?></p>
             </td>
             <td class="border-bottom-0">
                <p class="mb-0 fw-normal"><?= $row['phone'] ?></p>
             </td>
             <td class="border-bottom-0">
                <p class="mb-0 fw-normal"><?= $row['dob'] ?></p>
             </td>
             <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                  <span class="badge bg-<?= $row['gender'] == 'male' ? 'primary' : 'success'; ?> rounded-3 fw-semibold"><?= $row['gender'] ?></span>
                </div>
             </td>
             <td class="border-bottom-0">
                <p class="mb-0 fw-normal"><?= $row['image'] ?></p>
             </td>
             <td>
                 <a href="register/Action/edit.php?id=<?= $row['ID'] ?>" class="btn btn-primary">Update</a>
                 <a href="register/Action/delete.php?id=<?= $row['ID'] ?>" class="btn btn-danger">Delete</a>
            </td>
          <?php
        }
        include_once "register/Vue/pagination.php";
?>