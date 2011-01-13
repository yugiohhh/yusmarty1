<?php
require_once('includes/common.inc.php');

$smarty->assign('name','Hoàng');
$smarty->assign('company','YUProduction');

$string = '<img style="border: medium none;" src="http://aasdsai14.tinypic.com/6sba5br.jpg" alt="Old Slavonic Ornaments">';
$string = preg_replace("/\<img(.*)src\=\"([^\"]*)\"([^\>]*)\>/is", "[img]\\2[/img]", $string);

$smarty->assign('output',$string);

$smarty->debugging = true;
$smarty->display('index.tpl');
?>