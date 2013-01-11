<?php
/**
 * Here're your description about this file and its function
 *
 * @version			$Id: UnPublish.php Jul 27, 2010 2:07:54 PM$
 * @category		Kernel/Admin
 * @package			AFAdmin_View_Helper_Abstract Package
 * @subpackage		App_Admin_View_Helper_Html_Grid
 * @license			http://xgoon.com
 * @copyright		Copyright (c) 2005-2011 XGOON MEDIA
 * @author			toan@xgoon.com (toan)
 * @file			Grid.php
 *
 */

class App_View_Helper_Html_Option extends App_Admin_View_Helper_Abstract
{
    public $view;

    public function setView(Zend_View_Interface $view)
    {
        $this->view = $view;
    }

    /**
     * @param	string	The value of the option
     * @param	string	The text for the option
     * @param	string	The returned object property name for the value
     * @param	string	The returned object property name for the text
     * @return	object
     */
    function option($value, $text = '', $value_name = 'value', $text_name = 'text', $disable = false)
    {
        $arr = array ();
        $arr[$value_name] = $value;
        $arr[$text_name] = trim ( $text ) ? $text : $value;
        return $arr;
    }
}