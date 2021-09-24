<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abdelrahman Hamza</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
    <?php
    $correctAns = 31;
    if (!isset($_GET['guess']))
        echo "Missing guess parameter";
    else if ($_GET['guess'] == "")
        echo "Your guess is too short";
    else if (!is_numeric($_GET['guess']))
        echo "Your guess is not a number";
    else if ($_GET['guess'] < $correctAns)
        echo "Your guess is too low";
    else if ($_GET['guess'] > $correctAns)
        echo "Your guess is too high";
    else
        echo "Congratulations - You are right";

    ?>

</p>
</body>
</html>