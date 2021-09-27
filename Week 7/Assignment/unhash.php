<?php
session_start();
$password = $_GET["password"];
$_SESSION ["total_checks"] = 0;
    $start_time = microtime(true);
for ($i = 0; $i <= 9; $i++)
    for ($j = 0; $j <= 9; $j++)
        for ($k = 0; $k <= 9; $k++)
            for ($l = 0; $l <= 9; $l++) {
                $_SESSION ["total_checks"]++;
                $actual_pass = (string)($i).(string)($j).(string)($k).(string)($l);
                $check = hash('md5', $actual_pass);
                $_SESSION["hashCodes"][]=$check;
                if($check == $password)
                {
                    $_SESSION["Answer"] = $actual_pass;
                }
                $_SESSION["time"] = microtime(true) - $start_time;
                if(isset($_SESSION["Answer"]))
                {
                    header("Location: index.php");
                    exit();
                }
            }
$_SESSION["Answer"] = "Not Found";
header("Location: index.php");
exit();
