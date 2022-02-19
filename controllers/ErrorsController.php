<?php 

class ErrorsController
{
    public function displayErrors()
    {
        $template = 'www/views/static/404';
        require('www/views/templates/layout.phtml');
    }
}