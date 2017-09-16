<?php

echo"<h1><center>Euclidean Distance!</center></h1>";

function zip($a, $b) {

         if(count($a) != count($b))  {echo"Be sure that both arrays have the same dimension!"; return; }

         $args = func_get_args();

         $ruby = array_pop($args);

         if (is_array($ruby)) $args[] = $ruby;

         $counts = array_map('count', $args);

         $count = ($ruby) ? min($counts) : max($counts);

         $zipped = array();
 
         for ($i = 0; $i < $count; $i++) {

              for ($j = 0; $j < count($args); $j++) {

                  $val = (isset($args[$j][$i])) ? $args[$j][$i] : null;

                  $zipped[$i][$j] = $val;
              }
         }

         return $zipped;
};


function euclidean_distance_functional($a, $b) {

         $s = 0;
  
         foreach(zip($a,$b) as $k=>$val) {

                 $s = array_reduce($val, 'sub',0);
                 echo$s."<br>";

         }
         return $s;
};

function euclidean_distance_procedural($a , $b) {

         if(count($a) != count($b))  {echo"Be sure that both arrays have the same dimension!"; return; }

         $s = 0;

         for($i = 0; $i < count($a); ++$i) {

             $s += pow(($b[$i]-$a[$i]), 2);  
         }

         return sqrt($s);
};

$arr1 = array(1,2,3);
$arr2 = array(4,5,6);

echo"<pre>";
print_r(zip($arr1,$arr2));
echo"</pre>";

echo euclidean_distance_functional($arr1, $arr2);
echo euclidean_distance_procedural($arr1, $arr2);

function sum($carry, $item) {

         $carry += $item;
         return $carry;
}

function sub($carry, $item) {

         $carry -= $item;

         return $carry;
}


?>