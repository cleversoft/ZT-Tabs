<?php

/**
 * ZT Tabs
 * 
 * @package     Joomla
 * @subpackage  Module
 * @version     1.0.0
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
$uri = JURI::getInstance();

$document->addStyleSheet($uri->root() . 'modules/mod_zt_tabs/assets/css/tabs.css');
$document->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

$jversion = new JVersion;
$current_version = $jversion->getShortVersion();
if (version_compare($current_version, '3.0.0') <= 0)
{
    $document->addScript($uri->root() . 'modules/mod_zt_tabs/assets/vendor/jquery/jquery-1.9.1.js');
    $document->addScript($uri->root() . 'modules/mod_zt_tabs/assets/vendor/jquery/jquery.noConflict.js');
    $document->addScript($uri->root() . 'modules/mod_zt_tabs/assets/vendor/bootstrap/js/bootstrap.js');
    $document->addScript($uri->root() . 'modules/mod_zt_tabs/assets/vendor/jquery/fixConflict.js');
}

JLoader::discover('ZtTabsHelper', __DIR__ . '/helper');
