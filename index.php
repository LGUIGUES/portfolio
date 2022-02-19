<?php

// Start Session //
session_start();

// Files Requires //
require('controllers/HomeController.php');
require('controllers/StaticController.php');
require('controllers/ContactController.php');
require('controllers/ErrorsController.php');


// Roots //
if (array_key_exists('page', $_GET)) {

    switch($_GET['page']) {
        
        case 'about' :
            $staticController = new StaticController();
            $staticController -> viewAboutPage();
            break;
        
        case 'formation' :
            $staticController = new StaticController();
            $staticController -> viewFormationPage();
            break;
          
        case 'production' :
            $staticController = new StaticController();
            $staticController -> viewProductionPage();
            break;
            
        case 'contact' :
            $contactController = new ContactController();
            $contactController -> contactForm();
            break;

        case 'legalNotice' :
            $staticController = new StaticController();
            $staticController -> viewLegalNoticePage();
            break;       
        
        default :
            $errorsController = new ErrorsController();
            $errorsController -> displayErrors();
    }

} else {
    $homeController = new HomeController();
    $homeController -> viewHome();
}
