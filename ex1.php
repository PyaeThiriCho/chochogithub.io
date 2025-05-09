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
















?>