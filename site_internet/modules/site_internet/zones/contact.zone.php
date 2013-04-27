<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class contactZone extends jZone {
    protected $_tplname='contact';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $mail = jForms::create("site_internet~contact");
        $this->_tpl->assign("MAIL", $mail);
        
    }
}
