<?php

// Arrays
$days = array("Mon"=>"Monday", "Tue"=>"Tuesday", "Wed"=>"Wednesday", "Thu"=>"Thursday", "Fri"=>"Friday", "Sat"=>"Saturday", "Sun"=>"Sunday");

$names = array("John", "Doe", "Jane");

sort($names); // ascending order
rsort($names); // descending order
asort($days); // associative arrays - ascending order, according to the value
arsort($days); // associative arrays - descending order, according to the value
ksort($days); // associative arrays - ascending order, according to the key
krsort($days); // associative arrays - descending order, according to the key

echo $names[0]."<br>";
echo $names{1}."<br>";
echo $names[2]."<br>";
// echo $names{3}."<br>";  Error: Undefined offset


echo $days["Mon"]."<br>";
echo $days["Tue"]."<br>";
echo $days["Wed"]."<br>";

echo "<br><ul>";

for ($i = 0; $i < count($names); $i++) {
    echo "<li>".$names{$i}."</li>";
}
echo "</ul><br><table>";

foreach ($days as $car => $value) {
    echo "<tr>"."<th>".$car."</th>"."<td>".$value."</td>"."</tr>";
}

echo "</table>";

// PHP Array functions

array(1, 2, 3); // creates an array;

// keys in an array to lowercase or uppercase
$upperArray = array_change_key_case($days, CASE_UPPER);
$lowerArray = array_change_key_case($days, CASE_LOWER);
"\$upperArray: ".print_r($upperArray);
"\$lowerArray: ".print_r($lowerArray);

echo "</br></br>";

// Splits an array into chunks of arrays
$chunkedArray = array_chunk($days, 3);
print_r($chunkedArray);
// Array ( [0] => Array ( [0] => Wednesday [1] => Tuesday [2] => Thursday ) [1] => Array ( [0] => Sunday [1] => Saturday [2] => Monday ) [2] => Array ( [0] => Friday ) )
echo "</br></br>";

// Returns the values from a single column in the input array
$multiArray = array(
    array("name"=>"Traian","city"=>"Cluj"),
    array("name"=>"Mihali","city"=>"Napoca"),
);

print_r(array_column($multiArray, "city")); // Array ( [0] => Cluj [1] => Napoca )

// Creates an array by using the elements from one "keys" array and one "values" array
$nums = array("first", "second", "third");
$digits = array("1", "2", "3");

print_r(array_combine($nums, $digits)); // Array ( [first] => 1 [second] => 2 [third] => 3 )

// array_count_values() function counts all the values of an array
$countValues = array(1, 1, 2, 3, 3, 3);
print_r(array_count_values($countValues)); // Array ( [1] => 2 [2] => 1 [3] => 3 )

// Compare arrays, and returns the differences (compare values only)
$diff = array_diff($digits, $nums);
print_r($diff); // Array ( [0] => 1 [1] => 2 [2] => 3 )

// array_diff_assoc() - Compare arrays, and returns the differences (compare keys and values)
// array_diff_key() - Compare arrays, and returns the differences (compare keys only)

echo "</br></br>";

print_r(array_map((function ($v) {
    return $v*$v;
}), $countValues)); // Array ( [0] => 1 [1] => 1 [2] => 4 [3] => 9 [4] => 9 [5] => 9 )

echo "</br></br>";
print_r(array_merge($nums, $digits)); // Array ( [0] => first [1] => second [2] => third [3] => 1 [4] => 2 [5] => 3 )
