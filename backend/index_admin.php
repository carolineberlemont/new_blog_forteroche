<?php

require('controller/c.backend.php');

try
    {
    if (isset($_GET['action'])) 
        {
        if ($_GET['action'] == 'post') 
            {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
                {                    
                post_admin();
                }
            else 
                {
                throw new Exception('Aucun identifiant de billet envoyé');
                } 
            }    
        elseif ($_GET['action'] == 'mentionslegales')
            {
                mentionslegales();
            }    
        elseif ($_GET['action'] == 'addpost')
            {
                addpost();
            }
        }      
    else 
        {
            listposts_admin();
        }
    }
catch(Exeption $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }