<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login_form.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Login">

<?php 
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $username=htmlspecialchars($_POST["username"]);
    $password=htmlspecialchars($_POST["password"]);


    if($username=="admin" && $password=="123456")
    {
        session_start();
        $_SESSION['login']=true;
        $_SESSION['username']=$username;
        header("Location: profile.php");
        exit();
    }
    else
    {
        echo "Login failed";
    }

   } 
?>

</body>
</html>

