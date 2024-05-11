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

echo "<hr>";

$myFile = fopen("open.txt", "w") or die ("Unable to open the file");
$txt = "John Doe \n";

fwrite($myFile, $txt);

fwrite($myFile, "My File");
fclose($myFile);

$myFile = fopen("open.txt", "w") or die ("Unable to open the file");
$txt = "John Doerr \n";

fwrite($myFile, $txt);

// fwrite($myFile, "My File");
fclose($myFile);

    ?>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>