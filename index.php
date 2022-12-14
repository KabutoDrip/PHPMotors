<?php
require_once '../PHPMotors/library/connections.php';
require_once 'model/main-model.php';

$classifications = getClassifications();

$navList = '<ul>';
 $navList .= "<li><a href='/PHPMotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
 foreach ($classifications as $classification) {
  $navList .= "<li><a href='/PHPMotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
 }
 $navList .= '</ul>';
echo $navList;
exit;
