<?php
    if(!isset($_GET['name']))
        die("Name parameter missing");
    if(isset($_POST['logout']))
    {
        header("Location: index.php");
        return;
    }
    function check($computer,$human)
    {
        if($computer ==$human)
            return "Tie";
        elseif ($human==1 && $computer==0 || $human==0&&$computer==2 || $human==2&&$computer==1)
            return "You Win";
        else
            return "You Lose";
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
</head>
<style>
    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #333;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>
<body>
    <h1>Rock Paper Scissors</h1>
    <p>Welcome: <?= $_GET['name']?></p>
    <form action="" method="post">
        <select name="choice" id="">
            <option value="-1">Select</option>
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
            <option value="3">Test</option>
        </select>
        <input type="submit"name="play" value="Play">
        <input type="submit"name="logout" value="Logout">
    </form>
<pre>
    <?php
    if(isset($_POST['play']))
    {
        $names = ["Rock", "Paper", "Scissors"];
        if($_POST["choice"]!=-1 && $_POST["choice"]!=3) {

            $computer = rand(0, 2);
            echo "Your Play=" . $names[$_POST['choice']] . " Computer Play=" .$names[$computer]. " Result=".check($computer,$_POST['choice']);
        }
        else{
            for($c=0;$c<3;$c++) {
                for($h=0;$h<3;$h++) {
                    $r = check($c, $h);
                    print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
                }
            }
        }
    }
    else
        echo"Please select a strategy and press Play.";
    ?>
</pre>
</body>
</html>