<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class MDPoublieZone extends jZone {
    protected $_tplname='mdpoublie';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $mdp = jForms::create("site_internet~mdpOublie");
        $this->_tpl->assign("MDP", $mdp);
        
    }
}
