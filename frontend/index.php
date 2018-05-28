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