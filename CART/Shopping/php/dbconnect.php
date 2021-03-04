<?php

$con = mysqli_connect("localhost", "root", "", "newdb");


if(mysqli_connect_errno())
{
    echo "Failed to connect DB", mysqli_connect_errno();
}
echo "Connected sucesssfully";
?>