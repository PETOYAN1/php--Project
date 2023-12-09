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
        if($_FILES['file']['error'] == 0) {
            $filename = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $location = '../files/';
            move_uploaded_file($tmp_name, "$location" . time() . '.jpg');
        } else {
            $Errors['file'] = 'file not found';
        }

        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);
        $dob = htmlspecialchars($_POST['dob']);
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $photo = time() . '.jpg';

        // If not Error Connecting MySQL

        if(!$Errors) {
            include 'db_connect.php';

            if(!$conn) {
                die('Failed Database' . mysqli_connect_error());
            } else {
                $sql = "INSERT INTO `adminpanel` (`ID`, `name`, `surname`, `email`, `DateofBirth`, `gender`, `phone`, `image`, `password`, `dateRegister`) VALUES (NULL, '$name', '$surname', '$email', '$dob', '$gender', '$phone', '$photo', '$password', CURRENT_TIMESTAMP);";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    header("Location: ../index.php");
                } else {
                    echo 'Failed ' . mysqli_error($conn);
                }
            }
        }
    } 
?>