<?php
// for jelix application
require ('site_internet/application.init.php');

require('jelix/lib/installwizard/installWizard.php');

$config = 'site_internet/install/wizard.ini.php';

$install = new installWizard($config);

// for jelix application
$install->run(isAppInstalled());

//$install->run();
