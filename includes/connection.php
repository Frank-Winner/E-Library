<?php
    $servername = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'elibrary';

    $connect = mysqli_connect($servername, $user, $password, $dbname);

    function sanitize($data, $mycon){
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);

        $data = mysqli_real_escape_string($mycon, $data);
        return $data;
    }
?>