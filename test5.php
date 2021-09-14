<?php
$a=date('Y-m-d H:i:s');
$t1=date('Y-m-d H:i:s',strtotime(date("Y-m-d"),time()));
$t2=date('Y-m-d H:i:s',strtotime(date("Y-m-d"),time())-86400*1);
$t3=date('Y-m-d H:i:s',strtotime(date("Y-m-d"),time())-86400*2);
$k1=strtotime(date("Y-m-d"),time());
$k2=strtotime(date('Y-m-d H:i:s'),time());
echo $a;
echo "<br />";
echo $t1;
echo "<br />";
echo $t2;
echo "<br />";
echo $t3;


echo "<br />";
echo $k1;
echo "<br />";
echo $k2;