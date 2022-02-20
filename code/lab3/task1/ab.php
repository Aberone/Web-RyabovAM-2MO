<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
preg_match_all("/a..b/", $str, $matches);
echo "Задание 1-a. Найденные совпадения:";
foreach ($matches[0] as $match) {
    echo " " . $match;
}
