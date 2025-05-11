<?php

    $con=mysqli_connect("localhost","root","","crud");
    if(!$con){
        die('connect is fail '. mysqli_connect_error());
    }
?>