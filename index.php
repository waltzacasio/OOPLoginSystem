<?php
    session_start();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php
            if (isset($_SESSION["userid"]))
            {
         ?>  
            <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
            <li><a href="includes/logout.inc.php">LOGOUT</a></li>
        <?php
            }
            else
            {
        ?>
            <li><a href="#">SIGN UP</a></li>
            <li><a href="#">LOGIN</a></li>
        <?php
            }
        ?>
    </ul>

    <h4>SIGN UP</h4>
    <form action="includes/signup.inc.php" method="post">
        <input type="type" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <button type="submit" name="submit">SIGN UP</button>
    </form>

    <h4>LOGIN</h4>
    <form action="includes/login.inc.php" method="post">
        <input type="type" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">LOGIN</button>
    </form>


</body>
</html>