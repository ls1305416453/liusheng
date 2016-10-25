<?php
function height($height)
{  $sum=0;
   while($height>=1)
   {
   	  $sum+=$height;
   	  $height=(int)($height/2);
   }
   return $sum;
}
$arr=[100,90,80,70];
foreach($arr as $v)
{
	echo height($v).'<br>';
}
$data=file_get_contents('https://www.jd.com/');
file_put_contents('./1.text', $data);
var_dump($data);