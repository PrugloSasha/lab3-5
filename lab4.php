<?php
require_once('config.php');

$n1 = 5;
$n2 = 12;
if ($n1>$n2)
    $res = $n1;
else
    $res = $n2;

$tpl_vars=array('cond' => 'Дано два числа. Знайти більше з них. Вивести умову задачі, початкові
значення та результуючі.','n1' => $n1, 'n2'=>$n2 , 'res' => $res, 'cond1' => 'Дано цілочисельні координати точки на площині. Якщо точка
збігається з початком координат, то вивести 0. Якщо точка не збігається з
початком координат, але лежить на осі OX або OY, то вивести відповідно 1 або
2. Якщо точка не лежить на координатних осях, то вивести 3. Вивести умову
задачі, початкові значення та результуючі.', 'x1'=> 5 , 'y1' => 0);
$tpl_file='lab1-4.tmpl';
require_once('tpl_config.php');
?>