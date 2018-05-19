<?php

require('controller/c.backend.php');

try
    {
    if 	((isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "MOlusque37") 
    	AND 
    	(isset($_POST['login']) AND $_POST['login'] == "AuteurForteroche@#"))
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
        else
        	{
        	listposts_admin();
        	}
        }
    else 
        {
        home_admin();
        }
    }
catch(Exeption $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    }