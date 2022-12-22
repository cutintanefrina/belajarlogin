<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');

if(mysqli_connect_errno()){
    echo 'koneksi database gagal : '. mysqli_connect_error();
};

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
};

function daftar($data){
    global $con;
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $level = $data['level'];

    $query = "INSERT INTO user VALUES ('','$username','$email','$password','$level')";
    mysqli_query($con,$query);
    return mysqli_affected_rows($con);
};
?>