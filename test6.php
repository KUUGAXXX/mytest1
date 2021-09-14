<?php
//$results="12321-4134-3242";
//list($content,$sendTime,$uid)=split('[-]',$results);\
//echo
$date="12321-4134-3242";
list($year,$month,$day,$hour,$minute,$second)=preg_split('[-]',$date);

echo"北京时间：{$year}年{$month}月{$day}日{$hour}时{$minute}分{$second}秒";