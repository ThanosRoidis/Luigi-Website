<?php

//$link = mysqli_connect("localhost","luigi","1234!@#$","luigidatabase");
$link = mysqli_connect("webpagesdb.it.auth.gr", "luigi","1234!@#$","luigidatabase",3306);


if (!$link) {
    echo '<p>Error connecting to the database <br>';  
    echo 'Please try again.</p>';
    exit(); 
}

?>