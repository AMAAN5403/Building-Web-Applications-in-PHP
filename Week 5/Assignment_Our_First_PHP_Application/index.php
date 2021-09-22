<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abdelrahman Mohamed</title>
</head>
<body>
<h1>Abdelrahman Mohamed</h1>
<pre>
<?php
for ($i = 0; $i < 10; $i++) {
    $str = str_repeat(" ", 10-$i) . "*" . str_repeat(" ", $i);
    if($i!=5)
        echo $str.strrev($str). "<br>";
    else
        echo str_repeat(" ", 10-$i).str_repeat('*',12)."<br>";
}
?>
</pre>
<?php
print hash('sha256', 'Abdelrahman');
?>

</body>
</html>