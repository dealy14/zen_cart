<?php
/* @config.coursePurchasedAPI.php
 * 
 * This code ensures the auto-loading of the 
 * observer class 'coursePurchasedAPI' during
 * Zen Cart's application_top auto-load sequence.
 *
 */

$autoLoadConfig[10][] = array('autoType'=>'class',
				'loadFile'=>'observers/class.coursePurchasedAPI.php');
				
$autoLoadConfig[90][] = array('autoType'=>'classInstantiate',
				'className'=>'coursePurchasedAPI',
				'objectName'=>'coursePurchasedAPI');

?> 