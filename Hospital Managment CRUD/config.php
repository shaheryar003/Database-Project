<?php

$link = mysqli_connect("localhost","root","","hospital");

if(!$link)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>