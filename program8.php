<?php

// Function to calculate percentage
function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5)
{
    $totalMarks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = ($totalMarks / 500) * 100; // Assuming each subject is out of 100

    echo "Total Marks: " . $totalMarks . "<br>";

    return $percentage;
}

// Function call
$percentage = calculatePercentage(85, 78, 90, 88, 92);

echo "Percentage: " . $percentage . "%";
?>