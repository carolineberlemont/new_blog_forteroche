<?php
require('controller/c.backend.php');

try
    {
        if (isset($_GET['action'])) 
            {
                if ($_GET['action'] == 'listposts') 
                    {
                        listposts_admin();
                    }
                elseif ($_GET['action'] == 'post') 
                    {
                        if (isset($_GET['id']) && $_GET['id'] > 0) 
                            {
                                post_admin();
                            }
                        else 
                            {
                                echo 'Erreur : aucun identifiant de billet envoyé';
                            }
                    }
                elseif ($_GET['action'] == 'modified_post')
                    {
                        modifiedpost_admin();
                    }
                elseif ($_GET['action'] == 'newpost') 
                    {
                        newpost_admin();
                    }
                elseif ($_GET['action'] == 'addpost')
                    {
                        if (!empty($_POST['title']) && !empty($_POST['content']))
                            {
                                addpost_admin($_POST['title'], $_POST['content']);
                            }
                        else
                            {
                                echo 'Erreur : vous n\'avez pas remplis tous les champs';
                            }
                    }
                elseif ($_GET['action'] == 'deletecomment')
                    {
                        deletecomment_admin();
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
