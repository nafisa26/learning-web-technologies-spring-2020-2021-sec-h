<?php 
    $con=mysqli_connect('localhost','root','','user-mgt');

    if(!$con){
        die("coneection Failed ".mysqli_connect_error());
    }
?>