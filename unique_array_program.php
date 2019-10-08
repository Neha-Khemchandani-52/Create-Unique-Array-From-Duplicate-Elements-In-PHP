<?php

/***
** Description : Creating one unique array of elements from given two arrays
** Date Added : 8th October,2019
** Added By : Neha Khemchandani
***/


## create final array of elements in such a way that duplicate elements repeat only once
$array1= array(1,2,3,4,5,7);
$array2=array(1,3,5,7,9,11);

$final_array=array_unique(array_merge($array1,$array2)); // Using array_merge() and array_unique() built-in functions of php

echo "Printing the final Output Array";
echo PHP_EOL;
echo '<pre>';
print_r($final_array);

?>
