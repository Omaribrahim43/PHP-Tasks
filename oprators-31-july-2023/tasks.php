<?php
// 1.	Write a PHP script to see if the specified year is a leap year or not.
// Sample Input: 2013
// Sample Output: ‘This year is not a leap year’
$year = 2008;
if($year % 4 == 0){
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
echo "<br>";
// 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’
$temp = 27;
if($temp < 20) {
    echo "we are in winter";
} else {
    echo "It is summertime!";
}
echo "<br>";
// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’
$arr = [ 'firstInteger'  =>  2 , 'secondInteger' => 2];
if($arr['firstInteger'] == $arr['secondInteger']) {
    echo (array_sum($arr) * 3);
} else {
    echo array_sum($arr);
}
echo "<br>";
// 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’
if($arr['firstInteger'] + $arr['secondInteger'] == 30) {
    echo array_sum($arr);
}else {
    echo 'false';
}
echo "<br>";

// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’
$n = 21;
if($n%3==0){
    echo "true";
} else {
    echo "false";
}
echo "<br>";

// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’
if($n >= 20 && $n <= 50) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";
// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9
$arr1 = [9 ,1 ,5,52,24,123,52,1,4];
sort($arr1);
echo $arr1[count($arr1)-1];
echo "<br>";

// 8.	Write PHP script to calculate the monthly electricity bill according to these rules

// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit
$units = 233;
if($units <= 50 ){
    echo 2.5 * $units;
} else if($units <= 150 ){
    echo 5 * $units;
} else if($units <= 250 ){
    echo 6.2 * $units;
} else {
    echo 7.5 * $units;
}
echo "<br>";

// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’
$age = 15;
if($age >= 18 ){
    echo "person is eligible to vote";
} else {
    echo "person is not eligible to vote";
}
echo "<br>";

// 10.	Write php script  to check whether a number is positive, negative or zero
// Sample Input: -60
// Sample Output: ‘Negative’
$num = -60;
if($num > 0) {
    echo "Positive";
} else if ($num < 0){
    echo "Negative";
} else {
    echo "Zero";
}
echo "<br>";

// 11.	Write php script to make a calculator, the calculator should contain the four main operations 
// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division
$x = 5;
$y = 6;
$operator = "*";
switch($operator) {
    case "+":
        echo $x + $y;
        break;
    case "-":
        echo $x - $y;
        break;
    case "*":
        echo $x * $y;
        break;
    case "/":
        echo $x / $y;
        break;
    default:
        echo "no operator";
}
echo "<br>";
// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’
// Range Grade
// <60	 F
// <70	 D
// <80	 C
// <90	 B
// <100  A
$score = [60,86,95,63,55,74,79,62,50];
$avg = array_sum($score)/count($score);
switch($avg) {
    case $avg > 60:
        echo 'F';
        break;
    case $avg > 70:
        echo 'D';
        break;
    case $avg > 80:
        echo 'C';
        break;
    case $avg > 90:
        echo 'B';
        break;
    case $avg > 100:
        echo 'A';
        break;
    default:
        echo "enter a valid grades";
}

