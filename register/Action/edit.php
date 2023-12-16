<?php
    include '../db_connect.php';
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM `admin` WHERE ID = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['submit'])) {
        $name = $_POST['name']; 
        $surname = $_POST['surname']; 
        $email = $_POST['email']; 
        $gender = $_POST['gender']; 
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        $dob = $_POST['dob'];

        $sql = "UPDATE `admin` SET `name`='$name',`surname`='$surname',`email`=
        '$email',`dob` = '$dob',`phone` = '$phone',`gender`='$gender', `password` = '$password' WHERE ID = $id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: ../../index.php?msg=New record updated successfully");
        } else {
            echo 'Failed ' . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../../assets/css/styles.min.css" />
</head>
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="../../assets/images/logos/dark-logo.png" width="180" alt="">
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="init"><div class="simplebar-wrapper selected" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask selected"><div class="simplebar-offset selected" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper selected" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content selected" style="padding: 0px 24px;">
          <ul id="sidebarnav" class="in">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item selected">
              <a class="sidebar-link active" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Edit User</span>
              </a>
            </li>
          </ul>
      </div>
    </aside>
    <div class="body-wrapper">
      <header class="app-header position-relative w-100">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
              </li>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                  <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../files/1702074824.jpg" alt="" width="35" height="35" class="rounded-circle">
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="message-body">
                      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">My Profile</p>
                      </a>
                      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-mail fs-6"></i>
                        <p class="mb-0 fs-3">My Account</p>
                      </a>
                      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-list-check fs-6"></i>
                        <p class="mb-0 fs-3">My Task</p>
                      </a>
                      <a href="register/login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
    <form method="post" style="width: 50%; margin: 0 auto;">
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label">name</label>
                        <input id="name" value="<?echo $row['name'] ?>" type="text" class="form-control" name="name" placeholder="Samvel">
                    </div>
                </div>
                    <div class="row mb-3">
                    <div class="col">
                        <label for="surname" class="form-label">surname</label>
                        <input id="surname" value="<?echo $row['surname'] ?>" type="text" class="form-control" name="surname" placeholder="Petoyan">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">email</label>
                        <input id="email" value="<?echo $row['email'] ?>" type="email" class="form-control" name="email" placeholder="samvelpetoyan11@gmail.com">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="password" class="form-label">password</label>
                        <input id="password" value="<?= $row['password'] ?>" type="password" class="form-control" name="password" placeholder="...">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <label for="dob" class="form-label">Date of Birth</label>
                      <input value="<?= $row['dob']?>" type="date" class="form-control" name="dob" id="dob">
                    </div>
                  </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="phone" class="form-label">phone</label>
                        <input id="phone" value="<?echo $row['phone'] ?>" type="number" class="form-control" name="phone" placeholder="Petoyan">
                    </div>
                </div>
                <div class="form-group mb-3 d-flex gap-2">
                    <label class="me-4" for="male">Gender:</label>
                    <div class="me-7 d-flex">
                        <label for="male" class="form-input-label">Male</label>
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male" <? echo $row['gender'] == 'male' ? 'checked' : '' ?>>
                    </div>
                    <div class="d-flex">
                        <label for="female" class="form-input-label">Female</label>
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female"  <? echo $row['gender'] == 'female' ? 'checked' : '' ?>>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-success" type="submit" name="submit">Update</button>
                    <a class="btn btn-danger" href="../../index.php">Cancel</a>
                </div>
            </form>
    </div>
  </div>
</body>
</html>