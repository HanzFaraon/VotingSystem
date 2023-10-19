<?php

    $connect = mysqli_connect('localhost', 'root', '', 'votingsystem') or die ("Connection failed");

    if($connect){
        echo "Connected";
    }
    else{
        echo "Not Connected";
    }

?>