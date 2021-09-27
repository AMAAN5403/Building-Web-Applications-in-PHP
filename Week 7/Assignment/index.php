<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>MD5 cracker</h1>
    <p>This application takes an MD5 hash of a two-character lower case string and attempts to hash all two-character
    combinations to determine the original two characters.</p>
    <pre>
        Debug Output:
        <?php
            if(isset($_SESSION["hashCodes"])) {
                $i = 0;
                foreach ($_SESSION["hashCodes"] as $code) {
                    if ($i > 14)
                        break;
                    if ($i != 0)
                        echo "\t";
                    echo $code . "\n";
                    $i++;
                }
            }
            if(isset($_SESSION["total_checks"]))
                echo "\t"."Total checks: ".$_SESSION["total_checks"]."\n";
            if(isset($_SESSION["time"]))
            echo "\t"."Elapsed time: ".$_SESSION["time"]."\n";
        ?>
        <form action="unhash.php"method="get">
            <input type="text" name="password">
            <input type="submit" value="Crack MD5">
        </form>
        PIN: <?php
        if(isset($_SESSION["Answer"]))
            echo $_SESSION["Answer"];
        session_destroy();
        ?>
    </pre>
</body>
</html>