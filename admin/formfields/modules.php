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

require_once __DIR__ . '/../../helper/common.php';

class JFormFieldModules extends JFormField
{

    public function getInput()
    {
print_r ($this->value);
        $list = ZtTabsHelperCommon::getModules();
        foreach ($list as $position => $modules)
        {
            $items = array();
            foreach ($modules as $module)
            {
                $items[] = array(
                    'value' => $module->id,
                    'text' => $module->title
                );
            }
            $data[] = array(
                'value' => '',
                'text' => $position,
                'items' => $items
            );
        }

        $attr = array(
            'id' => 'modules',
            'list.attr' => 'class="inputbox" multiple '
        );
        return JHtml::_('select.groupedlist', $data, 'jform[params][modules]', $attr);
    }

}
