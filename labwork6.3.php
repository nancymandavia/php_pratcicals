<!DOCTYPE html>
<html>
<head>
    <title>str_word_count() Function</title>
</head>
<body>

<form method="post">
    Enter a String:
    <input type="text" name="str" required>
    <input type="submit" name="submit" value="Count Words">
</form>

<?php
if(isset($_POST['submit']))
{
    $str = $_POST['str'];

    echo "<h3>Output</h3>";
    echo "Entered String: " . $str . "<br>";
    echo "Number of Words: " . str_word_count($str);
}
?>

</body>
</html>