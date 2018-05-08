<?php
require('controller/c.frontend.php');

try{

if (isset($_GET['action'])) 
    {
    if ($_GET['action'] == 'lastPost')    
        {
            lastPost();
        }
    elseif ($_GET['action'] == 'post') 
        {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
            {
                post();
            }
        else 
            {
                throw new Exeption('aucun identifiant de billet envoyé');
            }
        }

    elseif ($_GET['action'] == 'addComment') 
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
    }
else 
    {
        listPosts();
    }
}
catch(Exeption $e) {
    echo 'Erreur : ' . $e->getMessage();
}