<?php 
//part one: By using nl2br function to crate a newline
echo nl2br("My name is:\n Ahmed sobhi sharaf.\n\n\n");
?>

<?php 
//part two : BY using foreach looping
foreach($_SERVER as $key => $value){
echo " [$key] =>  $value . '<br><br>'";
}
?>

<?php 
// part three
$arr = [12, 45, 10, 25]; //The Array 

//Array to get the Summation
$sum = array_sum($arr);
echo "Array summation = $sum <br>";

//Array to ge the Average
$avg = $sum / count($arr);
echo "Array average = $avg <br>";

//Array to sort order descending
$sort = rsort($arr);
echo "sort the order array descendingly = " ;
print_r($arr);
echo '<br><br>';
?>

<?php 
//part four
$arr2 = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40,);

//1) Sort the order ascendingly by value:
asort($arr2);
echo "1) Sort the order ascendingly by value:";
print_r($arr2);
echo '<br>';

//2) Sort the order descendingly by value:
arsort($arr2);
echo "2) Sort the order descendingly by value:\n";
print_r($arr2);
echo '<br>';

//3) Sort the order ascendingly by key:
ksort($arr2);
echo "3) Sort the order ascendingly by key:";
print_r($arr2);
echo '<br>';

//4) Sort the order descendingly by key:
krsort($arr2);
echo "4) Sort the order descendingly by key:\n";
print_r($arr2);
echo '<br>';
?>