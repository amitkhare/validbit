<?php
namespace AmitKhare\PHPValidation;

require(__DIR__."/validateit.php");
//print_r($_GET);


$v = new ValidateIt();

$v->setSource($_GET);

$v->check("username","required|string|min:4|max:10");
$v->check("email","required|email");
$v->check("firstName","required|string|max:25");

if($v->isValid()){
	echo "check pass\n\r\n\r";
}
print_r($v->getStatus());