<?php

$age=30;
if($age>=18)
{
    echo "you can register";

}
else
{
    echo "you are underage";
}
echo "<hr>";
$day_of_week=8;
switch($day_of_week)
{
    case 1:
        echo "Monday";
        break;
    case 2:
        echo"Tuesday";
        break;
    case 3:
        echo"Wednesday";
        break;
    case 4:
        echo"Thursday";
        break;
    case 5:
        echo"Friday";
        break;
    case 6:
        echo"Saturday";
        break;
    case 7:
        echo"Sunday";
        break;
    default:
        echo"Unknown day";


}

