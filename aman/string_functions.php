<?php
$name="harry is good boy ";
echo $name;
echo "<br>";
echo "the length of my string is ".strlen($name)."<br>";  //. operator concatinates two strings
echo str_word_count($name)."<br>";
echo strrev($name)."<br>";
echo strpos($name,"y")."<br>";
echo str_replace("harry","rohan",$name)."<br>";
echo str_repeat($name,6)."<br>";
echo "<pre>";
echo rtrim("    this is a good boy.  ")."<br>";
echo ltrim("    this is a good boy.  ");
echo "</pre>";





?>