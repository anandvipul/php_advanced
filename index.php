<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Advanced</title>
</head>
<body>
    <?php
    echo "Today is ". date("l d.m.Y"); 
    echo "<br>";
    echo "ROday is ". date("d.m.YYYY");

    echo "<br>";
    echo "&copy; 2010 -". date("Y");

    echo "<br>";
    echo date_default_timezone_get();
    date_default_timezone_set("Asia/Kolkata");
    echo "<br>";
    echo date_default_timezone_get();
    echo "<br>";
    echo date("H.i.s.a");
echo "<br>";
    $d = mktime(11,14,12,5,1,2001);
    echo $d;
    echo "<br>";
    echo "Created date as ". date("d.m.y. H.i.s a", $d);
    echo "<br>";

    $d = strtotime("10:30 am april 2023");
    echo $d;
    ?>
</body>
</html>