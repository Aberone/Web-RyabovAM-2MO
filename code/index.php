<?php
// LAB №2
// TASK 1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

$order = &$very_bad_unclear_name;
$order .= " and a large soda";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


// ——————————————————————————————————————————————————
// TASK 2
echo "<br><br>TASK 2<br>";

$arbitrarily_named_variable = 11317;
echo $arbitrarily_named_variable . "<br>";
$my_beloved_exp = 2.718;
echo $my_beloved_exp . "<br>";
echo (1+2)*(1*2)*(1**2-(1-2)) . "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month . "<br>";


// ——————————————————————————————————————————————————
// TASK 11
echo "<br>TASK 11<br>";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "<br>";


// ——————————————————————————————————————————————————
// TASK 12
echo "<br>TASK 12<br>";

echo 8**2 . "<br>";


// ——————————————————————————————————————————————————
// TASK 13
echo "<br>TASK 13<br>";

$my_num = 505;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
