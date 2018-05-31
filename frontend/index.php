<?php

require('controller/c.frontend.php');

// chaque action doit appeler une page entiere

try
    {
    if (isset($_GET['action'])) 
        {
        if ($_GET['action'] == 'post') 
            {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
                {                    
                    post();
                }
            else 
                {
                    throw new Exception('Aucun identifiant de billet envoyé');
                } 
            } 
         elseif ($_GET['action'] == 'addComment') 
            {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
                {
                    if (!empty($_POST['author']) && !empty($_POST['comment'])) 
                    {
                        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    }
                    else 
                    {
                        echo 'Erreur : tous les champs ne sont pas remplis !';
                    }
                }
            else 
                {
                    echo 'Erreur : aucun identifiant de billet envoyé';
                } 
            }            
        elseif ($_GET['action'] == 'bio')  
            {
                bio();
            }
        elseif ($_GET['action'] == 'contact')
            {
                contact();
            }
        elseif ($_GET['action'] == 'mentionslegales')
            {
                mentionslegales();
            }    
        }      
    else 
        {
            home();
        }
    }
catch(Exeption $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }