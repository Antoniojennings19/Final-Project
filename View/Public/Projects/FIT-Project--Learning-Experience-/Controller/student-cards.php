<?php
    function makeStudentCard($stuCourse, $stuFirst, $stuLast, $stuGrade, $rowNum){
        echo "
        <div class='student-card-grid' style='grid-column: 1/5; grid-row: {$rowNum}; text-align: center;'>
            <table>
                <tr>
                    <th colspan='2'>Student Information</th>
                </tr>
                <tr>
                    <th>Course Name</th>
                    <td>{$stuCourse}</td>
                </tr>
                <tr>
                    <th>Student Name</th>  
                    <td>{$stuFirst} {$stuLast}</td>      
                </tr>  
                <tr>
                    <th>Grade</th>
                    <td>{$stuGrade}</td>
                </tr>
            </table>
        </div>    
        ";
    }

?>