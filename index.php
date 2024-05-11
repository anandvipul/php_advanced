<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Advanced</title>
</head>
<body>
    <?php
echo readfile("temp.txt");
echo "<hr>";
echo filesize("temp.txt");
echo "<hr>";
$myFile = fopen("temp.txt", "r") or die("Unable to open the file!");
echo fread($myFile, filesize("temp.txt"));
fclose($myFile);
echo "<hr>";
$myFile = fopen("temp.txt", "r");
while(!feof($myFile)) {
    echo fgets($myFile);
    echo "<br>";
}
fclose($myFile);
    ?>
</body>
</html>