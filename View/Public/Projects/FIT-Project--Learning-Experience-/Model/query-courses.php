<?php
class courseName {
    public function __construct($db){
        $this->conn = $db;
    }

    function courseRead(){

        //Selects all courses
        $query = "SELECT  S.StudentFirst, S.StudentLast, S.GradeLevel, C.CourseName 
        FROM Classes AS C 
        INNER JOIN Students AS S 
        ON C.StudentID = S.StudentID";

        //Prepare query statement
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        //Return values
        return $stmt;
    }
}

?>