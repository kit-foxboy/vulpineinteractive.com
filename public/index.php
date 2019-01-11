<?php

//import classes
use Smarty\SmartyPortfolio\SmartyPortfolio;
require_once "../vendor/autoload.php";

$smarty = new SmartyPortfolio;
$smarty->assign("greetings", "Hello World!");
$smarty->display($smarty::TEMPLATES[INDEX]);

?>