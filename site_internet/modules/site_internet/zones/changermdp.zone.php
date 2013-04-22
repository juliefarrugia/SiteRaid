<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class changerMDPZone extends jZone {
    protected $_tplname='changermdp';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $form = jForms::create("site_internet~changeMDP");
        $this->_tpl->assign("PASS", $form);
        
    }
}
