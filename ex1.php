<?php
$num=2;
echo "<br>";
if($num % 2 ==0)
{
    echo "<br>";
    echo "$num is even";
}
else{
    echo "<br>";
    echo "$num is odd";
}

echo "<br>";

//switch case

$num1=40;
$num2=20;
$action="+";

switch($action)
{
case "+": 
echo $num1+$num2;
break;

case "-": 
echo $num1-$num2;
break;

 case "*": 
        echo $num1*$num2;
        break;

case "/": 
echo $num1/$num2;
break;

default:
echo "error";

}

echo "<br><br>";


function factorial($n){
 $fact=1;

for($i=1;$i<=$n;$i++)
{
    $fact=$fact*$i;

}
    return $fact;
}

$result=factorial(5);
echo $result;

echo "<br>";

//function default value in php
function greeting($name ="Guest"){
    return "Hello $name";
}
$result=greeting();
echo $result;

echo "<br><br>";

//Array
//1.Indexed array
//2.Associated array
//3.Multimensional Array

//1.Indexed array
$fruits=array("Apple","Orange","Banana");

//foreach loop
foreach($fruits as $fruit){
    echo "<br>";
    echo $fruit;
}

echo "<br><br>";


//2.Associated array
$person=array(
    "name"=>"John",
    "age" => 30,
    "city" => "New York"
);

//foreach loop
foreach($person as $key => $value){
    echo "<br>";
    echo $key . ":" . $value;
}

echo "<br><br>";

//Exercise
$mark=array(
    "Aung Aung" => 80,
    "Kyaw Kyaw" =>40,
    "Hla Hla" =>70
);

foreach($mark as $key => $value){
    if($value>=50)
    {
        echo "<br>";
        echo $key."Passed";
    }
    else
    {
        echo "<br>";
        echo $key."Failed";
    }

}

?>