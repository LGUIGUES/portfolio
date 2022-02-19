<?php

class StaticController
{
    public function viewAboutPage()
    {   
        $titlePage = 'Laurent GUIGUES | Développeur Web Fullstack Junior | A propos';
        $metaDescription = 'Hello ! Vous allez découvrir un peu de mois dans cette page.';

        $template = 'www/views/static/about';
        require('www/views/templates/layout.phtml');        
    }

    public function viewFormationPage()
    {   
        $titlePage = 'Laurent GUIGUES | Développeur Web Fullstack Junior | Ma formation';
        $metaDescription = 'Découvrez ici, ma formation intensive de 3 mois(BootCamp) à la 3W Academy.';

        $template = 'www/views/formation/formation';
        require('www/views/templates/layout.phtml');
    }

    public function viewProductionPage()
    {   
        $titlePage = 'Laurent GUIGUES | Développeur Web Fullstack Junior | Mes réalisations';
        $metaDescription = 'Mes réalisations après ma formation. Projet final fin de formation, portfolio, projets personnels...';

        $template = 'www/views/production/production';
        require('www/views/templates/layout.phtml');
    }    

    public function viewLegalNoticePage()
    {   
        $titlePage = 'Laurent GUIGUES | Développeur Web Fullstack Junior | Mentions Légales';
        $metaDescription = 'Les mentions légales de ce portfolio.';

        $template = 'www/views/static/legal_notice';
        require('www/views/templates/layout.phtml');
    }    
}