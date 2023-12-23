<?php
    $Errors = [];

    if(isset($_POST['submit'])) {
        if(!$_POST['name']) {
            $Errors['name'] = 'name is Required';
        } else if (strlen($_POST['name']) < 5) {
            $Errors['name'] = 'Name should be at least 5';
        }
        if(!$_POST['surname']) {
            $Errors['surname'] = 'surname is Required';
        } else if(strlen($_POST['surname']) < 5) {
            $Errors['surname'] = 'Surname should be at least 5';
        }
        if(!$_POST['email']) {
            $Errors['email'] = 'email is Required';
        }
        if(!$_POST['dob']) {
            $Errors['dob'] = 'date is Required';
        } 
        if(!$_POST['phone']) {
            $Errors['phone'] = 'phone number is Required';
        } else if (strlen($_POST['phone']) < 5) {
            $Errors['phone'] = 'Write correct phone number';
        }
        if(!$_POST['password']) {
            $Errors['password'] = 'password is Required';
        } else if (strlen($_POST['password']) < 8) {
            $Errors['password'] = 'Password should be at least 8 characters in length';
        }
        if(!$_POST['passwordRep']) {
            $Errors['passwordRep'] = 'Write repeat password';
        }
        if($_POST['passwordRep'] !== $_POST['password']) {
            $Errors['passMatch'] = 'passwords do not match'; 
        }

        // Validation file

        $target_dir = "../files/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION ));

    
        $check = getimagesize($_FILES["file"]["tmp_name"]);

        if($check === false) {
            $Errors['file'] =  "File is not an image.";
        } 
        if (file_exists($target_file)) {
            $Errors['file'] =  "Sorry, file already exists.";
        }
        if ($_FILES["file"]["size"] > 500000) {
            $Errors['file'] =  "Sorry, your file is too large.";
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $Errors['file'] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        
        // Get Special character

        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);
        $dob = htmlspecialchars($_POST['dob']);
        $phone = htmlspecialchars($_POST['phone']);
        $gender = $_POST['gender'];

        // If not Error Connecting MySQL

        if(!$Errors) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $photo = htmlspecialchars(basename( $_FILES["file"]["name"]));
            } 
            include 'db_connect.php';
            if(!$conn) {
                die('Failed Database' . mysqli_connect_error());
            } else {
                $password = md5($_POST['password']);
                $sql = "INSERT INTO `admin` (`ID`, `name`, `surname`, `email`, `dob`, `gender`, `password`, 
                `phone`, `image`, `dateRegister`) VALUES (NULL, '$name', '$surname', '$email', '$dob', '$gender', 
                '$password', '$phone', '$photo', CURRENT_TIMESTAMP)";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        header("Location: login.php");
                    } else {
                        echo 'Failed ' . mysqli_error($conn);
                    }
            }
        }
    } 
?>