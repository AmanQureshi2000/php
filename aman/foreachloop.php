<?php
echo "foreachloop"."<br>"."-----------------------"."<br>";
$arr = array("bananas","apples","harpic","bread","butter");
// for($i=0;$i<count($arr);$i++)
// {
//     echo $arr[$i];
//     echo "<br>";
// }
//better way ??
foreach($arr as $value)
{
    echo $value."<br>";
}


?>