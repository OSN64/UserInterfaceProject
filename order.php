<?php
require 'smarty/libs/Smarty.class.php';
date_default_timezone_set('Australia/Brisbane');

$smarty = new Smarty;
$smarty->display('order.tpl');
?>