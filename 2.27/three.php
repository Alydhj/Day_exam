<?php 
function Add($num1, $num2) 
{
	$sum=0;
  while ($num2) {
  	   //按位异或
   	   $sum=$num1^$num2;
   	   //按位与
   	   $num2=($num1&$num2)<<1;
   	   $num1=$sum;
   } 
   return $sum;
}
print_r(Add(3,5));
 ?>