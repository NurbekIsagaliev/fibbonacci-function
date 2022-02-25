<?php
/*Последовательность Фибоначчи. Необходимо написать функцию 
iborow(int $limit) : string которая будет возвращать элементы последовательности 
Фибоначчи ограниченной переданным на вход значением $limit в виде строки 
(разделитель - пробел). Например: при входном значении 10 функция должна 
вернуть строку "0 1 1 2 3 5 8" 
Fibonacci sequence. Need to write a function
iborow(int $limit) : string that will return the elements of the sequence
Fibonacci limited by the $limit value passed to the input as a string
(separator - space). For example: with an input value of 10, the function should
return string "0 1 1 2 3 5 8"*/

function fiborow(int $limit):string{
$f0=1;$f1=1; $str=""; 
for($i=7;$i<$limit;$i++){
      $str.=$f0." ".$f1." ";
      $f0=$f0+$f1;
      $f1=$f1+$f0;
      }
return  $str;
   }
echo('0 '.fiborow(10));

