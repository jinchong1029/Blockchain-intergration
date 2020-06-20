<?php
require 'utils/smarty/libs/Autoloader.php';
Smarty_Autoloader::register();

define('PATH', getcwd());
define('DEBUG', false); // modifici aici cand dai drumu pe live


$smarty = new Smarty();
$smarty->setTemplateDir(PATH.'\template');
$smarty->setCompileDir('./cache/templates_c/');
$smarty->setConfigDir('./cache/configs/');
$smarty->setCacheDir('./cache/cache/');

$smarty->debugging     = DEBUG;
$smarty->compile_check = DEBUG;
$smarty->force_compile = DEBUG;

//$smarty->clearAllCache();

$smarty->assign(array(
    'DEBUG'             => DEBUG,
    'SESSION'           => @$_SESSION,
    'IP'                => @$_SERVER["REMOTE_ADDR"]
));


?>
