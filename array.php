<?php
//arrays
$names=["Mary","Musa","Mike,","Mendi","Jacky","Alvin","Amos","Brenda"];
$ages=[10,30,18,17,16,20,26,30,80];
echo $names[4];
echo"<br>";
echo $ages[0];
foreach($names as $jina)
{
    echo"$jina<br>";



}
echo"<hr>";
echo sizeof($names);//count the # of names
echo"<hr>";
array_push($names, "Bush");
echo sizeof($names);
echo"<br>";
var_dump($names);
echo"<br>";
array_pop($names);
var_dump($names);
echo"<hr>";
rsort($ages);
foreach ($ages as $miaka)
{
    echo"$miaka<br>";

}
echo"<hr>";
array_sum($ages);
echo"<br>";
//associative array
$person=["names"=>"Alvin Musa","age=>61","color"=>"black" ];
echo $person["names"];
echo"<br>";

echo"<br>";
echo $person["color"];

