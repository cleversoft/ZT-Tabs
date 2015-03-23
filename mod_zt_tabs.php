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

require_once __DIR__ . '/bootstrap.php';

$helper = new moZTTabsHelper($params);

$helper->parseData();
$helper->renderLayout();

