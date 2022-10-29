<?php
require_once '../library/connections.php';
require_once '../model/main-model.php';
require_once '../model/vehicles-model.php';

$classifications = getClassifications();

$navList = '<ul>';
 $navList .= "<li><a href='/PHPMotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
 foreach ($classifications as $classification) {
  $navList .= "<li><a href='/PHPMotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";}
$navList .= '</ul>';

$classificationSelector = "<select name='classSelector'>";

 foreach ($classifications as $classification) {
    $classificationSelector .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>";}
$classificationSelector .= "</select>";

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');}
switch ($action) {
    case 'classification':
        include '../view/add-classification.php';
    break;
    case 'vehicle':
        include '../view/add-vehicle.php';
    break;
    case 'postClassification':
        $message = 'Error, Empty or Invalid Input';
        include '../view/add-classification.php';
    break;
    case 'postVehicle':
        $message = 'Error, Empty or Invalid Input';
        include '../view/add-vehicle.php';
    break;
    default: 
        include '../view/vehicle-management.php';
    break;}
   ?>
