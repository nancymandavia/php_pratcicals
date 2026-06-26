<!DOCTYPE html>
<html>
<head>
    <title>strtolower() Function</title>
</head>
<body>

<form method="post">
    Enter a String:
    <input type="text" name="str" required>
    <input type="submit" name="submit" value="Convert to Lowercase">
</form>

<?php
if(isset($_POST['submit']))
{
    $str = $_POST['str'];

    echo "<h3>Output</h3>";
    echo "Entered String: " . $str . "<br>";
    echo "Lowercase String: " . strtolower($str);
}
?>

</body>
</html>