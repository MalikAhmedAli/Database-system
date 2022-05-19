<?php

    $username = "root";
    $password = "";
    try {
    $conn = new PDO("mysql:host=localhost;dbname=THEMEPARK", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    // echo 'HI';
    echo '<pre>';
    // print_r($_POST);
    //var_dump($_POST);

    } 

    catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }




    $park_code      = $_GET['PARK_CODE'];
    $park_name      = $_GET['PARK_NAME'];
    $park_city      = $_GET['PARK_CITY'];
    $park_country   = $_GET['PARK_COUNTRY'];


    $conn->query("insert into THEMEPARK 
        (PARK_CODE,PARK_CODE,PARK_CITY,PARK_COUNTRY) values 
        ('$park_code','$park_name','$park_city','$park_country')" );



    echo '<br>';
    echo 'Your form has been submitted successfully';
    echo '<a href="./labtask4.php">Click here to go back to main page</a>';

?>
