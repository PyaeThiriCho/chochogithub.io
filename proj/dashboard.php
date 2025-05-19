<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit();
}

//theme setup
$theme=isset($_COOKIE['theme']) ? $_COOKIE['theme']:'light';
$bg= $theme =='dark' ? '#222':'#fff';
$color= $theme  =='dark'? '#fff' : '#222';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $bg; ?>; color: <?php echo $color; ?>;">
    <h1>Welcome dashboard</h1> <?php echo $_SESSION['username']; ?>! |
    <a href="logout.php">Logout</a>
    <a href="switch_theme.php">Switch theme</a>
    <?php
    $students=[
        ["name"=>"Cho","grade"=>80],
        ["name"=>"Pyae","grade"=>90],
        ["name"=>"Htun","grade"=>70],
        ["name"=>"Thant","grade"=>65],
        ["name"=>"Phyu","grade"=>40]
    ];
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Grade</th>
        </tr>

        <?php foreach($students as $student):?>
            <tr>
                <td><?=$student["name"]?></td>
                <td><?=$student["grade"]?></td>
            
            </tr>
        
        <?php endforeach; ?>
    </table>
        




</body>
</html>