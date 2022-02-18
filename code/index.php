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
echo $answer . "<br>";


// ——————————————————————————————————————————————————
// TASK 14
echo "<br>TASK 14<br>";

$a = 10;
$b = 3;
$c = $a % $b;
echo "{$a} % {$b} = {$c}<br>";

$a = 25;
$b = 5;
if ($a % $b === 0) {
	$c = $a / $b;
	echo "Делится {$c}<br>";
}
else {
	$c = $a % $b;
	echo "Делится с остатком {$c}<br>";
}

$st = pow(2, 10);
echo $st . "<br>";
echo sqrt(245) . "<br>";
$ar = [4, 2, 5, 19, 13, 0, 10];
$sar = 0;
foreach ($ar as $elem) {
	$sar += $elem;
}
echo $sar . "<br>";	

$sq = sqrt(379);
echo round($sq) . " " . round($sq, 1) . " " . round($sq, 2) . "<br>";
$sq = sqrt(587);
$sq_floor_and_ceil = ["floor" => floor($sq), "ceil" => ceil($sq)];

$ar = [4, -2, 5, 19, -130, 0, 10];
echo min($ar) . " " . max($ar) . "<br>";
echo rand(1, 100) . "<br>";
$ar = [];
for ($i = 0; $i < 10; $i++) {
	$ar[] = rand();
	echo $ar[$i] . ", ";
}
echo "<br>";

$a = 13;
$b = 17;
echo abs($a - $b) . "<br>";
$ar = [1, 2, -1, -2, 3, -3];
$br = [];
foreach ($ar as $elem) {
	$br[] = abs($elem);
}
foreach ($br as $elem) {
	echo $elem . ", ";
}
echo "<br>";

$example_number = 30;
$en_divisors = [];
for ($i = 1; $i <= $example_number; $i++) {
	if ($example_number % $i === 0) {
		$en_divisors[] = $i;
		echo $i . " ";
	}
}
echo "<br>";

$ar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$elem_account = 0;
$ar_sum = 0;
while ($ar_sum <= 10) {
	$ar_sum += $ar[$elem_account];
	$elem_account++;
}
echo $elem_account . "<br>";


// ——————————————————————————————————————————————————
// TASK 15
echo "<br>TASK 15<br>";

function printStringReturnNumber()
{
	echo "Please help me I am dying of boredom... 505 is my SOS...<br>";
	return 505;
}
$my_num = printStringReturnNumber();
echo $my_num . "<br>";


// ——————————————————————————————————————————————————
// TASK 16
echo "<br>TASK 16<br>";

function increaseEnthusiasm(string $s): string
{
	return $s . "!";
}
echo increaseEnthusiasm("msaisuhtnEesaercni") . "<br>";

function repeatThreeTimes(string $s): string
{
	return $s . $s . $s;
}
echo repeatThreeTimes(increaseEnthusiasm("BORING")) . "<br>";

function cut(string $s, int $length=10): string
{
	$res = "";
	for ($i = 0; $i < $length; $i++) {
		$res .= $s[$i];
	}
	return $res;
}

function echo_array(array $arr, $first_idx=0)
{
	if ($first_idx > count($arr)) {
		return null;
	}
	else if ($first_idx === count($arr) - 1) {
		echo $arr[$first_idx] . "<br>";
		return null;
	}
	else {
		echo $arr[$first_idx] . ", ";
		echo_array($arr, $first_idx + 1);
	}
}
$ar = [4, -2, 5, 19, -130, 0, 10];
echo_array($ar);

function reduce_number(int $num): int
{
	$digit_sum = 0;
	$num_copy = abs($num);
	while ($num_copy > 0) {
		$digit_sum += $num_copy % 10;
		$num_copy /= 10;
	}
	if ($digit_sum < 10) {
		return $digit_sum;
	}
	else {
		return reduce_number($digit_sum);
	}
}
$test_number = 13189532;
echo reduce_number($test_number) . "<br>";


// ——————————————————————————————————————————————————
// TASK 17
echo "<br>TASK 17<br>";

/*
    Формулировка «Заполните массив следующим образом: в первый элемент запишите 'x',
во второй 'xx', в третий 'xxx' и так далее» волшебна, так что я решил просто писать
'xxxxxxxxxxxxxxxxxx', пока не надоест....
*/
$ar = ['x', 'xx', 'xxx', 'xxxx', 'xxxxx', 'xxxxxx', 'xxxxxxx', 'xxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxxx'];
// Всё, надоело

function arrayFill($elem, int $times)
{
	$res = [];
	for ($i = 0; $i < $times; $i++) {
		$res[] = $elem;
	}
	return $res;
}
echo_array(arrayFill('x', 5));

$ar = [[1, 2, 3], [4, 5], [6]];
$ar_sum = 0;
for ($i = 0; $i < count($ar); $i++) {
	for ($j = 0; $j < count($ar[$i]); $j++) {
		$ar_sum += $ar[$i][$j];
	}
}
echo $ar_sum . "<br>";

$ar = [];
for ($i = 0; $i < 3; $i++) {
	$ar[] = [];
	for ($j = 0; $j < 3; $j++) {
		$ar[$i][] = 1 + $j + 3*$i;
	}
}
function echo_2d_array(array $arr)
{
	for ($i = 0; $i < count($arr); ++$i) {
		echo_array($arr[$i]);
	}
}
echo_2d_array($ar);

$ar = [2, 5, 3, 9];
$result = $ar[0] * $ar[1] + $ar[2] * $ar[3];
echo $result . "<br>";

$user = ['name' => 'Ахалай', 'surname' => 'Махан', 'patronymic' => 'Махалаевич'];
echo $user['name'] . " " . $user['surname'] . " " . $user['patronymic'] . "<br>";

$date = ['year' => 2022, 'month' => 02, 'day' => 18];
echo $date['year'] . "-" . $date['month'] . "-" . $date['day'] . "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
$elem_account = 0;
foreach ($arr as $elem) {
	$elem_account++;
}
echo $elem_account . "<br>";
echo $arr[$elem_account - 1] . "<br>";
echo $arr[$elem_account - 2] . "<br>";


// ——————————————————————————————————————————————————
// TASK 18
echo "<br>TASK 18<br>";

function sum_is_greater_than_ten(int $a, int $b): bool
{
	return $a + $b > 10;
}

function are_equal(int $a, int $b): bool
{
	return $a === $b;
}

$test = 0;
echo $test == 0 ? 'верно<br>' : '';

$age = 59;
if ($age < 10 or $age > 99) {
	echo "Число меньше 10 или больше 99<br>";
}
else {
	$age_digit_sum = $age / 10 + $age % 10;
	if ($age_digit_sum <= 9) {
		echo "Сумма цифр числа однозначна<br>";
	}
	else {
		echo "Сумма цифр числа двузначна<br>";
	}
}

$ar = [1, 2, 3];
if (count($ar) == 3) {
	echo $ar[0] + $ar[1] + $ar[2] . "<br>";
}
