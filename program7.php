<?php

// Function to display student details
function studentDetails($studentName, $enrollmentNo, $semester)
{
    echo "Student Name: " . $studentName . "<br>";
    echo "Enrollment Number: " . $enrollmentNo . "<br>";
    echo "Semester: " . $semester . "<br>";
}

// Function call
studentDetails("nancy mandavia", "ENR92400527130", 5);

?>