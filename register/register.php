<?php
    include 'validation.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>
  <body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="../index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="../assets/images/logos/dark-logo.png" width="180" alt="">
                  </a>
                  <p class="text-center">Your Social Campaigns</p>
                  <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input value="<?= isset($_POST['name']) ? $_POST['name'] : '';?>" placeholder="name" type="text" name="name" class="form-control" id="name" aria-describedby="textHelp">
                      <span><?= isset($Errors['name']) ? $Errors['name'] : '' ?></span>
                    </div>
                    <div class="mb-3">
                      <label for="surname" class="form-label">Surname</label>
                      <input value="<?= isset($_POST['surname']) ? $_POST['surname'] : '';?>" placeholder="surname" type="text" name="surname" class="form-control" id="surname" aria-describedby="textHelp">
                      <span><?= isset($Errors['surname']) ? $Errors['surname'] : '' ?></span>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>" placeholder="email" type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <span><?= isset($Errors['email']) ? $Errors['email'] : '' ?></span>
                    </div>
                    <div class="mb-4">
                      <label for="dob" class="form-label">Date of Birth</label>
                      <input value="<?= isset($_POST['dob']) ? $_POST['dob'] : '';?>" type="date" class="form-control" name="dob" id="dob">
                      <span><?= isset($Errors['dob']) ? $Errors['dob'] : '' ?></span>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">
                        <label>Gender</label>
                    </div>
                      <label class="form-label me-2" for="male">Male</label>
                      <input class="me-4" id="male" type="radio" name="gender" value="male" aria-describedby="textHelp" checked>
                      <label class="form-label me-2" for="female">Female</label>
                      <input id="female" type="radio" name="gender" value="female" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input value="<?= isset($_POST['phone']) ? $_POST['phone'] : '';?>" placeholder="phone" type="number" name="phone" class="form-control" id="phone" aria-describedby="textHelp">
                      <span><?= isset($Errors['phone']) ? $Errors['phone'] : '' ?></span>
                    </div>
                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>
                      <input multiple id="image" type="file" name="file" class="form-control" aria-describedby="textHelp">
                      <span><?= isset($Errors['file']) ? $Errors['file'] : '' ?></span>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input id="password" type="password" name="password" class="form-control" aria-describedby="textHelp">
                      <span><?= isset($Errors['password']) ? $Errors['password'] : '' ?></span>
                    </div>
                    <div class="mb-3">
                      <label for="passwordRep" class="form-label">Repeat password</label>
                      <input id="passwordRep" type="password" name="passwordRep" class="form-control" aria-describedby="textHelp">
                      <span><?= isset($Errors['passwordRep']) ? $Errors['passwordRep'] : '' ?></span>
                    </div>
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                      <a class="text-primary fw-bold ms-2" href="login.php">Sign In</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>