<?php

// Function definition
function welcomeStudent()
{
    echo "Welcome Student! Have a great day.";
}

// Check if the function exists before calling it
if (function_exists("welcomeStudent"))
{
    welcomeStudent();
}
else
{
    echo "Error: Function welcomeStudent() does not exist.";
}

?>