<?php
    session_start();
    if(isset($_SESSION['login']))
    {
        header("Location: dashboard.php");//already login
        exit(); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Login">


<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=htmlspecialchars($_POST["username"]);
    $password=htmlspecialchars($_POST["password"]);

    if($username=="admin" && $password=="123456"){

        $_SESSION['login']=true;
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "<br>";
        echo "Invalid username or password";
    }


    }

 ?>

</body>
</html>

