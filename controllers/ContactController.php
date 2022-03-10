<?php

class ContactController
{
    public function contactForm()
    {
        if (isset($_POST['submit'])) {

            $errors = [];           
            $regexPhone = '#^0[1-68]([. ]?[0-9]{2}){4}$#'; // Format phone number : 01 02 03 04 05 ou 01.02.03.04.05 //
            
            // If input remarks is not empty, it's a spam of crawler //
            if($_POST['remarks'] != '') {

                header('location:index.php');
                exit();
            }

            if (!array_key_exists('lastName', $_POST) || $_POST['lastName'] == '') {

                $errors['lastName'] = 'Vous devez saisir votre Nom';
            }

            if (!array_key_exists('firstName', $_POST) || $_POST['firstName'] == '') {

                $firstName = '';
            }

            if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                $errors['email'] = 'Vous devez saisir un email valide';
            }

            if (!array_key_exists('object', $_POST) || $_POST['object'] == '') {

                $object = 'Formulaire de contact';
            }

            if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {

                $message = 'Message vide';
            }

            if (!array_key_exists('rgpd', $_POST) || $_POST['rgpd'] == '') {

                $errors['rgpd'] = 'Vous devez accepter la politique de confidentialité.';
            }

            if (array_key_exists('phone', $_POST) && !preg_match($regexPhone, $_POST['phone'])) {

                $errors['phone'] = 'Vous devez saisir un numéro de téléphone valide.';
            }

            if (!empty($errors)) {

                $_SESSION['errors'] = $errors;
                $_SESSION['formData'] = $_POST;
                header('location:index.php?page=contact');
                exit();

            } else {

                $recipient = 'contact@laurentguigues.fr';
                $lastName = $_POST['lastName'];
                $firstName = $_POST['firstName'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $object = $_POST['object'];
                $message = $_POST['message'];
                $customer = $firstName.' '.$lastName.' - '.$phone;
                $headers = 'De: '.$email;                

                $mailSend = mail($recipient, $headers, $object.' : '.$customer, $message);

                if($mailSend) {

                    $success['success'] = 'Votre message a bien été envoyé.';
                    $_SESSION['success'] = $success;
                    header('location:index.php?page=contact');
                    exit();

                } else {

                    $errors['err'] = 'Une erreur s\'est produite !';
                    $_SESSION['errors'] = $errors;
                    header('location:index.php?page=contact');
                    exit();
                }                
            }

        } else {

            $titlePage = 'Laurent GUIGUES | Développeur Web Fullstack Junior | Me contacter';
            $metaDescription = 'Vous souhaitez en savoir plus, me proposer un poste ou un projet... Vous êtes au bon endroit.';

            $template = 'www/views/contact/contact_form';
            require('www/views/templates/layout.phtml');
        }        
    }
}
