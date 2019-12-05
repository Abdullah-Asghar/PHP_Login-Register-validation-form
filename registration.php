<?php

session_start();
// header('location:login.php');

$con = mysqli_connect('localhost', 'root', '', 'phpregistrationlogin');
// mysqli_select_db($con, 'phpregistrationlogin');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' ";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num){
echo "Username Already Taken";
}else{
    $reg = "insert into usertable(name, password) value('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>