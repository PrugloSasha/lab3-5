<?php
require_once('config.php');

$choose = 5;
$num = 15;

switch ( $choose )
{
case 1:
$result= $num / 10;
break;
case 2:
$result= $num * 1000;
break;
case 3:
$result= $num;
break;
case 4:
$result= $num / 1000;
break;
case 5:
$result= $num / 100;
break;
default:
$result= "А не дорівнює ні 1, ні 2, ні 3";
}


$years = 25;

switch (  intdiv($years,10) )
{
case 2:
$result1= "двадцять ";
break;
case 3:
$result= "тридцять ";
break;
case 4:
$result= "сорок ";
break;
case 5:
$result= "п'ятдесят ";
break;
case 6:
$result= "шістдесят ";
break;
default:
$result= "А не дорівнює ні 1, ні 2, ні 3";
}

switch ( $years % 10 )
{
case 0:
$result2= "років";
break;
case 1:
$result2= "один рік";
break;
case 2:
$result2= "два роки";
break;
case 3:
$result2= "три роки";
break;
case 4:
    $result2= "чотири роки";
break;
case 5:
    $result2= "п'ять років";
break;
case 6:
    $result2= "шість років";
break;
case 7:
    $result2= "сім років";
break;
case 8:
    $result2= "вісім років";
break;
case 9:
    $result2= "дев'ять років";
break;
default:
$result= "А не дорівнює ні 1, ні 2, ні 3";
}



$tpl_vars=array('cond' => 'Одиниці довжини пронумеровані в такий спосіб: 1 - дециметр,
2 - кілометр, 3 - метр, 4 - міліметр, 5 - сантиметр. Дано номер единиці довжини
(ціле число в діапазоні 1-5) і довжина відрізка в цих одиницях (дійсне число).
Знайти довжину відрізка в метрах. Вивести умову задачі, початкові значення та
результуючі.', 'choose' => $choose, 'num' => $num, 'res' => $result,
'cond1' => 'Дано ціле число в діапазоні 20-69, що визначає вік (в роках).
Вивести рядок-опис зазначеного віку, забезпечивши правильне узгодження
числа з словом «рік», наприклад: 20 - «двадцять років», 32 -
«тридцять два роки», 41 - «сорок один рік». Вивести умову задачі, початкові
значення та результуючі.', 'years' => $years, 'res1' =>  $result1 . $result2);
$tpl_file='lab1-5.tmpl';
require_once('tpl_config.php');
?>