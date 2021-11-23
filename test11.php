
<?php
$date="2017-08-31 23:00:00";
$leftDate = date('Y-m-d h:i:s', strtotime($date));
$rightDate = date('Y-m-d h:i:s', strtotime($date."+5 hours")); // 防止出现跨越到下一天的0点

$date1=strtotime($date);
$date2=$date1-86400;
$date2D=date('Y-m-d h:i:s',$date2);
echo $date1;
echo "<br>";
echo $date2;
echo "<br>";
echo $date2D;
echo 1;


