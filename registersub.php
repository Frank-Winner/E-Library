<?php
    require_once('connection.php');
    
    if(isset($_POST['submit'])){
        $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $username = isset($_POST['username']) ? trim($_POST['username']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        if($fullname == "" || $username == "" || $email == "" || $password == ""){
            $error = 'all fields are required';
            header('location: ../public/register.php?error'.$error);
            return false;
        }else{
            $fullname = sanitize($fullname, $connect);
            $username = sanitize($username, $connect);
            $email = sanitize($email, $connect);
            $password = sanitize($password, $connect);
        }

        // checking if email alrweady exists
        $check = "SELECT * FROM users WHERE email = '$email'";
        $check_result = mysqli_query($connect, $check);
        if(mysqli_num_rows($check_result) >  0){
            $error = 'email address already taken';
            header('location: ../public/register.php?error='.$error);
            return false;
        }else{
            $password = md5($password);
            $today = date('Y-m-d H:i:sa');

            $sql = "INSERT INTO users(fullname, email, username, password, createddate)VALUES('$fullname', '$email', '$username', '$password', '$today')";
            $res = mysqli_query($connect, $sql);
            if($res){
                $success = 'now log in with your details';
                header('location: ../public/index.php?success='.$success);
                return false;
            }else{
                $error = 'error creating account';
                header('location: ../public/register.php?error='.$error);
                return false;
            }
        }

    }else{
        $error = 'please login first';
        header('location: ../public/index.php?error='.$error);
        return false;
    }
