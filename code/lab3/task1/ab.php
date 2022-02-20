<?php
$str = "ahb acb aeb aeeb adcb axeb";
$matches = [];
preg_match_all("/a..b/", $str, $matches);
echo "Задание 1-a. Найденные совпадения:";
foreach ($matches[0] as $match) {
    echo " " . $match;
}
echo "<br>";


$str = "a1b2c3";
$str_cubes = preg_replace_callback(
    "/[0-9]+/",
    function (array $match)
    {
        return ((int)($match[0]) ** 3)."";
    },
    $str
);
echo "Задание 1-b. Изменённая строка: " . $str_cubes . "<br>";
