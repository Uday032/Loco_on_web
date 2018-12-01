<?php

$conn = mysqli_connect("localhost", "root","","Trivia");

if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}
