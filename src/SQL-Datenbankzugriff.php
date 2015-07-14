<?php


$con = mysqli_connect("localhost","root","sqlpw","testbase");


// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//mysqli_query($con,"CREATE TABLE `testtable` ( `column` INT NOT NULL ) ENGINE = InnoDB;");


echo "End";

