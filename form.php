<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br><br>

        &nbsp;&nbsp; <label for="age">Age</label>
        <input type="number" name="age" id="age"><br><br>

        &nbsp;&nbsp;&nbsp;<label for="city">City</label>
        <input type="text" name="city" id="city"><br><br>

        <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        echo"Name:$name";
        echo "<br>";
    }

    ?>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST["name"];
            $age=$_POST["age"];
            $city=$_POST["city"];

            echo "Name:$name<br>";
            echo "Age:$age<br>";
            echo "City:$city<br>";

        }

        else
        {
            echo "No data submitted";
        }
    
    ?>

</body>
</html>