<?php
/*
Author:
Adrian Statescu <mergesortv@gmail.com>

Description:
Counting Sort Algorithm.

Analysis Complexity:
Worst Case Time: O(n)
Average Case Time: O(n)
Best Case Time: O(n)
Space: O(n)

*/

function GetMax($arr, $n) {

   $max = $arr[0];

   for($i = 1; $i < $n; $i++) {
       if($arr[$i] > $max) {
         $max = $arr[$i];
       }
   }
   return $max;
}
$arr = array(4,8,7,6,5,15,9,8,1);

$n = count($arr);
$max = GetMax($arr,$n);

$counts = array();

for($i = 0; $i <= $max; $i++) {
  $counts[$i] = 0;
}

echo"Input:";
echo"<pre>";
print_r($arr);
echo"</pre>";


$max = GetMax($arr,$n);

for($i = 0; $i < $n; $i++) {
    $counts[$arr[$i]] += 1;
}

$pos = 0;
for($i = 0; $i <= $max;$i++) {
    for($j = 0; $j < $counts[$i]; $j++) {
        $arr[$pos] = $i;
        $pos = $pos + 1;
    }
}

echo"Output:";
echo"<pre>";
print_r($arr);
echo"</pre>";

?>
