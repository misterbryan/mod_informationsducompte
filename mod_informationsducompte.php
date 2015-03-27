<?php
/**
 * Informations du compte! Module Entry Point
 * 
 */
 
// no direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once( dirname(__FILE__) . '/helper.php' );
 
$informationsducompte = modInformationsducompteHelper::getInformationsducompte($params);
require( JModuleHelper::getLayoutPath('mod_informationsducompte'));
