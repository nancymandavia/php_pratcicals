<!DOCTYPE html>
<html>
<head>
    <title>strpos() Function</title>
</head>
<body>

<form method="post">
    Enter a String:
    <input type="text" name="str" required><br><br>

    Enter Word/Letter to Search:
    <input type="text" name="search" required><br><br>

    <input type="submit" name="submit" value="Find Position">
</form>

<?php
if(isset($_POST['submit']))
{
    $str = $_POST['str'];
    $search = $_POST['search'];

    $position = strpos($str, $search);

    echo "<h3>Output</h3>";

    if($position !== false)
    {
        echo "'$search' found at position: " . $position;
    }
    else
    {
        echo "'$search' not found in the string.";
    }
}
?>

</body>
</html>