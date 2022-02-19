<?php

Class HomeController
{
    public function viewHome()
    {   
        $titlePage = 'Laurent GUIGUES | Développeur Web Fullstack Junior';
        $metaDescription = 'Découvrez mes compétences de développeur intégrateur web dans ce portfolio. Formé avec la 3W Académy pour apprendre les 5 principaux langages du web : Html, Css, Js, Php et Sql. Faite le tour et n\'hésitez pas à me contacter.';

        $template = 'www/views/home/home';
        require('www/views/templates/layout.phtml');
    }
}