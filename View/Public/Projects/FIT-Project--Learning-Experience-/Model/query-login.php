<?php
class login {
    public function __construct($db){
        $this->conn = $db;
    }

    function loginRead(){

        //Selects all courses
        $query = "SELECT S.StudentEmail, S.StudentPassword, T.StaffEmail, T.StaffPassword 
        FROM StaffMemebrs AS T 
        INNER JOIN Students AS S 
        ON T.StaffID = S.StudentID";

        //Prepare query statement
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        //Return values
        return $stmt;
    }
}