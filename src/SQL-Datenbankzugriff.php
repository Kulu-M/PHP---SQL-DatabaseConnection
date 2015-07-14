<?php
/**
 * Created by PhpStorm.
 * User: Kulu-M
 * Date: 30.06.2015
 * Time: 13:10
 */





$con = mysqli_connect("localhost","root","sqlpw","testbase");


// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//mysqli_query($con,"CREATE TABLE `testtable` ( `column` INT NOT NULL ) ENGINE = InnoDB;");


echo "End";

