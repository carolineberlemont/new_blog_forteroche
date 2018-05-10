<?php

require('controller/c.frontend.php');

// chaque action doit appeler une page entiere

try
    {
    if (isset($_GET['action'])) 
        {
        if ($_GET['action'] == 'addcomment') 
            {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
                {
                if (!empty($_POST['author']) && !empty($_POST['content'])) 
                    {
                        addComment($_GET['id'], $_POST['author'], $_POST['content']);
                    }
                else 
                    {
                    throw new Exeption('tous les champs ne sont pas remplis !');
                    }
                }
             else 
                {
                    // Autre exception
                    throw new Exception('Aucun identifiant de billet envoyé');
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