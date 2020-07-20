<?php

$age = 35;
$name = "Daniel Rodriguez";

echo "Hello World!<br><br>";

echo "Hello ".$name."<br>You are ".$age." years old.<br><br>";

echo "Playing with numbers:<br>";
echo "<br>";

$odd_numbers = [1,3,5,7,9];
$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

print_r($odd_numbers);

echo "<br><br>";

unset($odd_numbers[3]);

echo "<br>";

print_r($odd_numbers);

$odd_numbers[3] = 20;
$odd_numbers[5] = 11;

echo "<br>";

print_r($odd_numbers);


echo "<br><br>";

echo count($odd_numbers);

echo "<br><br>";
$first_item = reset($odd_numbers);
echo "First: ".$first_item;
echo "<br><br>";
$last_item = end($odd_numbers);
echo "Last: ".$last_item;
echo "<br><br>";
$count = count($odd_numbers);
echo "Count: ".$count;


$numbers = [1,2,3];
array_push($numbers, 4); // now array is [1,2,3,4];
echo "<br><br>";
// print the new array
print_r($numbers);

$numbers = [1,2,3,4];
array_pop($numbers); // now array is [1,2,3];
echo "<br><br>";
// print the new array
print_r($numbers);

array_shift($numbers);
echo "<br><br>";
// print the new array
print_r($numbers);


array_unshift($numbers, 1); // now array is [1,2,3];
echo "<br><br>";
// print the new array
print_r($numbers);

$odd_numbers = [1,3,5,7,9];
$even_numbers = [2,4,6,8,10];
$all_numbers = array_merge($odd_numbers, $even_numbers);
echo "<br><br>";
print_r($all_numbers);

sort($all_numbers);
echo "<br><br>";
print_r($all_numbers);

echo "<br><br>";
print_r(array_slice($all_numbers, 3));

echo "<br><br>";
print_r(array_slice($all_numbers, 3, 5));

$numbers=$all_numbers;

echo "<br><br>";
print_r(array_splice($numbers, 3, 4));
print_r($numbers);


echo "<br><br>Current Year: ".(date("Y")+1);

?>