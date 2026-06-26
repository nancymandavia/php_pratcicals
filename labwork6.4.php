<!DOCTYPE html>
<html>
<head>
    <title>strrev() Function</title>
</head>
<body>

<form method="post">
    Enter a String:
    <input type="text" name="str" required>
    <input type="submit" name="submit" value="Reverse String">
</form>

<?php
if(isset($_POST['submit']))
{
    $str = $_POST['str'];

    echo "<h3>Output</h3>";
    echo "Entered String: " . $str . "<br>";
    echo "Reversed String: " . strrev($str);
}
?>

</body>
</html>