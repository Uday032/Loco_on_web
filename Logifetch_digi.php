<?php

if(isset($_POST['submit']))
{
    include 'Signdb_Digi.php';
    
    $mobile = $_POST['mobile'];
    $pwd = $_POST['pwd'];
    
    if(empty($mobile) || empty($pwd))
    {
        header("LOCATION : Login_digi.php");
    }
    else
    {
        $sql = "SELECT * FROM  Login_info WHERE mobile='$mobile'";
        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($result))
        {
            $pwdcheck = password_verify($pwd, $row['mobile']);
            if($row['mobile']== 999999)
            {
                if($pwdcheck = true){
                //Login
                header("LOCATION: Admin_logi.php");
                }
                else if($pwdcheck = false){
                    header("LOCATION: Login.digi.php");
                }
            }
            else {
                if($pwdcheck = true)
                {
                    header("LOCATION: AfterSign.php");
                }
                else if($pwdcheck = false){
                    header("LOCATION: Login.digi.php");
                }
            }
        }
        
    }
}