<?php
$termValue="开眼用户_2231a1";
if (empty($termValue) || preg_match('/^开眼用户_[A-Za-z0-9]{6}$/', $termValue)) {
echo "success";
}else{
echo "false";
}
