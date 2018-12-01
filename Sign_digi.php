<?php
include 'Signdb_Digi.php';


$first = $_POST['first'];
$last = $_POST['last'];
$mobile = $_POST['mobile'];
$pwd = $_POST['password'];
$cnfpwd = $_POST['cfpassword'];
if(!($pwd == $cnfpwd) || empty($first) || empty($last) || empty($mobile) || empty($pwd) || empty($cnfpwd))
{
    header("Location: Signup_Digi.php");
}
else
{
    $sql = "INSERT INTO Login_info(first, last, mobile, pwd) VALUES ('$first','$last','$mobile','$pwd')";

    $result = mysqli_query($conn,$sql);
    header("Location: Login_Digi.php");
}
?>