<?php

    //Include Database
    include './db-conn.php';
    include './student-cards.php';
    include '../Model/query-student.php';

    $stuPOST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    //Variables
    $studFirst = trim(htmlentities($stuPOST['first'])); 
    $studLast = trim(htmlentities($stuPOST['last']));
    $studGrade = trim(htmlentities($stuPOST['grade']));
    $studEmail = trim(htmlentities($stuPOST['email'])); 
    $studPhone = trim(htmlentities($stuPOST['phone']));
    $studPass = trim(htmlentities($stuPOST['pwd']));

    if($studFirst != "" && $studLast != "" && $studGrade != "" && $studEmail != ""  && $studPhone != ""  && $studPass != ""){
        $personData = [
            "first" => $studFirst,
            "last" => $studLast,
            "grade" => $studGrade,
            "email" => $studEmail,
            "phone" => $studPhone,
            "pwd" => $studPass
        ];

        $database = new Database();
        $db = $database->connect();

        $student = new Student($db);
        $student->addStudent($personData);
        echo "<p>You have successfully signed up!</p>";
    }
    else
    {
        echo "<p>You have not successfully signed up, please try again!</p>";
    }

?>