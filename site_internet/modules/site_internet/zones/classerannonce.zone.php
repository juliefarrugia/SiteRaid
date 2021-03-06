<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class classerAnnonceZone extends jZone {
    protected $_tplname='classerannonce';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login; 
        
        $annoncesFactory = jDao::get("annonce");
        $annonces = $annoncesFactory->findByC($log);
        $this->_tpl->assign('ANNONCE', $annonces);
    }
}
