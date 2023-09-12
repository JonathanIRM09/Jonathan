<?php
$server = "127.0.0.1";
$database = "unicom";
$username = "Jona";
$password = "123";
$con = mysqli_connect($server,$username,$password,$database);
if($con){
    
}else{
    echo "Muy mal";
}
?>
