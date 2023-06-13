<?php

$con = mysqli_connect('localhost','root','','appointment');
if($con){
    // echo "connectioin succesful";
}else{
    die(mysqli_error($con));
}

?>