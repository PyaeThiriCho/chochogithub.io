<?php
echo "Hello World";
echo "<br>";
$name="John";
echo "Hello $name";


//variable types
//string,integer,float,boolean,array

$age=20;
echo "<br>";
echo "Hello $name,you are $age years old";

$height=1.75;
echo "<br>";
echo "Hello $name,you are $age years old and $height meters tall";

$is_married=false;
echo "<br>";
echo "Hello $name,you are $age years old and $height meters tall and $is_married";

$hobbies =array("Coding","Slepping","Eating");
echo "<br>";
echo "Hello $name,you are $age years old and $height meters tall and your hobbies are $hobbies[0],$hobbies[1],$hobbies[2]";

//cotrol flow
//if,else,else if,switch

if($age<18)
{
    echo "<br>";
    echo "You are not allowed to vote";   
}
else{
    echo "<br>";
    echo "You are allowed to vote";
}


//while,do while,foreach
while($age<18){
    echo "<br>";
    echo "You are not allowed to vote";
    $age++;
}

//foreach loop
for($i=0;$i<5;$i++){
    echo "<br>";
    echo "Hello $name";
}

//function
//function name(parameter)

function sayHello($name){
    echo "<br>";
    echo "Hello $name";
}
    sayHello("John");

?>