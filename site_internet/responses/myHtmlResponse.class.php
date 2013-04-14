<?php
/**
* @package   site_internet
* @subpackage 
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/


require_once (JELIX_LIB_CORE_PATH.'response/jResponseHtml.class.php');

class myHtmlResponse extends jResponseHtml {

    public $bodyTpl = 'site_internet~main';

    function __construct() {
        parent::__construct();

        // Include your common CSS and JS files here
        $this->addCSSLink(jApp::config()->urlengine['basePath'].'css/menu.css');
        $this->addCSSLink(jApp::config()->urlengine['basePath'].'css/reste.css');
        $this->addCssLink(jApp::config()->urlengine['basePath'].'css/jquery-ui.css');
        $this->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery.min.js'); 
        $this->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery-ui.min.js');
        $this->addJSLink(jApp::config()->urlengine['basePath'].'js/rejoindre.js');
    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..
        
        
        $this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
