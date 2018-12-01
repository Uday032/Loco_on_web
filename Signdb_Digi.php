<?php

$conn = mysqli_connect("localhost", "root","","Digi_login");

if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}
