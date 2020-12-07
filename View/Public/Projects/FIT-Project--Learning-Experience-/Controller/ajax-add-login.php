<?php

    //Include Database
    include './db-conn.php';
    include './student-cards.php';
    include '../Model/query-teacher.php';
    include '../Model/query-student.php';

    $logPOST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    //Variables
    $logEmailVar = trim(htmlentities($logPOST['logEmail'])); 
    $logPassVar = trim(htmlentities($logPOST['logPass']));

    $database = new Database();
    $db = $database->connect();

    $staff = new Teacher($db);
    
    $student = new Student($db);

    if($staff->checkStaff($logEmailVar, $logPassVar))
    {
        echo "<script>window.location.href = './main-page.php';</script>";
    }
    else if($student->checkStudent($logEmailVar, $logPassVar))
    {
        echo "<script>window.location.href = './student-page.php';</script>";
    }
    else
    {
        echo "<p>Login Failed, Please Try Again!</p>";
    }

?>