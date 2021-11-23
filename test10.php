
<?php
$date="301487968	751492";
$leftDate = date('Y-m-d h:i:s', strtotime($date));
$rightDate = date('Y-m-d h:i:s', strtotime($date."+5 hours")); // 防止出现跨越到下一天的0点
$xxx= date('Y-m-d H:i:s', $time > 0 ? $time : time());
//echo $leftDate;
//echo "<br>";
//echo $rightDate;
//echo $xxx;
//$uidCode_id = substr($date, 10);
//echo $uidCode_id;
$date="http://img.kaiyanapp.com/1-e7837099bf5b41a3e9e3875448ee8845.jpeg";
$time=time();
//file_put_contents("C:\1",file_get_contents($date));
echo substr("abcdef", 4, -4);