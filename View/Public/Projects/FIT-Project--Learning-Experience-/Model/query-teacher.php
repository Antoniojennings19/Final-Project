<?php

    class Teacher
    {
        public function __construct($db)
        {
            $this->conn = $db;
        }

        function checkStaff($staffEmail, $staffPassword)
        {
            
            $query = "SELECT StaffEmail, StaffPassword
            FROM StaffMembers 
            WHERE StaffEmail = '$staffEmail' AND StaffPassword = '$staffPassword'";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();


            if($stmt->rowCount() <= 0)
            {
                return false;
            }
            else
            {
                return true;
            }

        }
    }
?>