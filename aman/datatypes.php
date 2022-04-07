<?php
/*
1.string
2.integer
3.float
4.array
5.object
6.boolean
7.NULL
*/
$name="harrry";
$friend='rohan';
echo"$name ka friend is $friend";
$x=200;
echo "<br>";
echo $x;
$is_true=false;
echo "<br>";
echo var_dump($is_true);
echo $is_true;//would give blank line

//object - instances of classes.
//employee is a class ---> harry can be a object.
$friends=array("rohan","shubham","skilf","larry");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
$a=NULL;
echo "<br>";
echo var_dump($a);


?>