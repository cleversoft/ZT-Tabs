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

jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField
{

    protected $type = 'Asset';

    protected function getInput()
    {
        JHtml::_('behavior.framework', true);

        $doc = JFactory::getDocument();
        $doc->addStyleSheet(JURI::root() . 'modules/mod_zt_tabs/admin/css/adminstyle.css');
        $doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
        $doc->addScript(JURI::root() . 'modules/mod_zt_tabs/admin/js/script.js');

        return;
    }

}
