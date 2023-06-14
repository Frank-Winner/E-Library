<?php
require_once('connection.php');

if (isset($_POST['submit'])) {
    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($fullname == "" || $email == "" || $username == "" || $password == "") {
        $error = 'All Fields are required';
        header('location: SignUp.php?error'.$error);
        return false;
    }else{
        $password = md5($password);

        $sql = "INSERT INTO users(fullname, username, email, password)VALUES('$fullname', '$username', '$email', '$password')";
        $res = mysqli_query($connect, $sql);

        if($res){
            $success = 'Now login with your details';

            header('location: SignUp.php?success'.$success);
            return false;
        }else{
            $error = 'Error creating account';

            header('location: SignUp.php');
            return false;
        }
    }
}else{
    $error = 'Login First';

    header('location: SignUp.php?error'.$error);
    return false;
}
