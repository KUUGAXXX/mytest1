
<?php
$dt = new DateTime();
$kkk="北京世相科技文化有限公司-开眼-运营部-北京运营";

//echo $kkk;
$str=substr ($kkk,0,strripos ($kkk,"-"));
$str1=substr ($str,strripos ($str,"-")+1);
echo $str;
echo "n/";
echo $str1;
echo "n/";

echo substr ($kkk,strripos ($kkk,"-")+1);

