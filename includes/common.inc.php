<?php
require_once('../libs/Smarty.class.php');
//require_once '../../yupro/discuz/include/common.inc.php';
$smarty = new Smarty();

//Global var config
$yuglobal = array(
'title' => 'YUProduction Smarty Project #1',
'description' => 'YUProduction Smarty Project #1',
'keywords' => 'yuproduction, smarty, project',
'template' => 'default'
);

$yuglobal['sitedir'] = preg_replace("/(.*)\/(.*).php/i","\\1/",$_SERVER['SCRIPT_NAME']);
$yuglobal['siteurl'] = "http://".$_SERVER['HTTP_HOST'].$yuglobal['sitedir'];
$yuglobal['imgdir'] = "templates/".$yuglobal['template']."/images/";

$smarty->template_dir = 'templates/'.$yuglobal['template'].'/';

$smarty->assign('yuglobal',$yuglobal);
$smarty->assign('yugeturi',$_GET['module']);

$yusptime = time(); //start proccess
$smarty->assign('yusptime',$yusptime);


//$yuqr = $db->query("SELECT author,subject FROM {$tablepre}threads ORDER BY `tid` DESC LIMIT 20");
//set_time_limit(0);
//sleep(10);

//while($yunewpost = $db->fetch_array($yuqr)) {print_r($yunewpost); echo"<br />";}

?>