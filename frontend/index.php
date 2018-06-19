<?php
require('controller/c.frontend.php');

try
    {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {                    
                    post($_GET['id']);
                }
            else {
                    echo 'Erreur : aucun identifiant de billet envoyé';
                } 
            } 
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (!empty($_POST['author']) && !empty($_POST['content'])) {
                        addComment($_GET['id'], $_POST['author'], $_POST['content']);
                    }
                    else {
                        echo 'Erreur : tous les champs ne sont pas remplis !';
                    }
                }
            else {
                    echo 'Erreur : aucun identifiant de billet envoyé';
                }
            } 
        elseif ($_GET['action'] == 'reporting') {
            if (isset($_GET['id']) && $_GET['id'] > 0){
                if (isset($_GET['comment_id']) && $_GET['comment_id'] > 0){
                        reporting($_GET['comment_id'], $_GET['id']);    
                    }
                else {
                        echo 'Erreur : vous ne pouvez pas signaler ce commentaire';
                    }
                }  
            else {
                    echo 'Erreur : aucun identifiant de billet envoyé';
                }              
            }
        elseif ($_GET['action'] == 'bio') {
                bio();
            }
        elseif ($_GET['action'] == 'contact') {
                contact();
            }
        elseif ($_GET['action'] == 'sendEmail') {
            if (!empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['Nom']) && !empty($_POST['email'])) {
                sendemail($_POST['subject'], $_POST['message'], $_POST['Nom'], $_POST['email']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis';
            }
        }
        elseif ($_GET['action'] == 'mentionslegales') {
                mentionslegales();
            }    
        }      
    else{
            home();
        }
    }
catch(Exeption $e) {
        echo 'Erreur : ' . $e->getMessage();
    }