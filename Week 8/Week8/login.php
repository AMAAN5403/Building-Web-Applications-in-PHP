<?php
    if(isset($_POST['cancel']))
    {
        header('Location: index.php');
        return;
    }
$failure = false;
    if(isset($_POST['submit']))
    {
        $salt = 'XyZzy12*_';

        $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
        $failure = false;
        if(isset($_POST["username"]) && isset($_POST["password"]))
        {
            if(strlen($_POST['username'])>1 && strlen($_POST['password'])>1)
            {
                $check = hash('md5',$salt.$_POST['password']);
                if($check == $stored_hash)
                {
                    header("Location: game.php?name=".urlencode($_POST['username']));
                    return ;
                }
                else
                    $failure = true;
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        * {
            font-family: sans-serif;
        }

        label {
            font-weight: bold;
        }

        .message {
            color: red;
        }
        .parent{
            margin:20vh auto;
            width: fit-content;
            padding: 2em;
            text-align: center;
            border-radius: .3em ;
            box-shadow:10px 10px 30px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="parent">
    <h1>Please Log In</h1>
    <?php
    if (!isset($_POST["username"]) || !isset($_POST["password"]) || strlen($_POST["password"]) == 0 || strlen($_POST["username"]) == 0) {
        echo "<p class='message'>User name and password are required</p>";
    }
    if($failure) {
        echo "<p class='message'>Incorrect password</p>";
    }?>
    <form action="" method="post">
        <P>
            <label for="username">User Name</label>
            <input type="text" name="username" id="username">
        </P>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>
        <input type="submit" value="log In" name="submit">
        <input type="submit" value="cancel" name="cancel">
    </form>
</div>

</body>
</html>