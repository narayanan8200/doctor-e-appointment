<?php

    $database= new mysqli("localhost","root","","doctor-e-appointment");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>