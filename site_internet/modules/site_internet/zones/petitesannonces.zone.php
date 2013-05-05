<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class petitesAnnoncesZone extends jZone {
    protected $_tplname='petitesannonces';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $annoncesFactory = jDao::get("annonce");
        $annonces = $annoncesFactory->findAll();
        $this->_tpl->assign('ALLANNONCE', $annonces);
        
    }
}
