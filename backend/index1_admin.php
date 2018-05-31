<?php
require('controller/c.backend.php');

try
    {
        if (!empty($_POST['login']) AND $_POST['login'] == "forteroche") AND (!empty($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou")
            {
               if (isset($_GET['action'])) 
                    {
                        if ($_GET['action'] == 'listposts') 
                            {
                                listposts_admin();
                            }
        // ajout de post
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
                                        echo 'tous les champs ne sont pas remplis';
                                    }                                            
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
// modifier un post
                        elseif ($_GET['action'] == 'modified_post')
                            {
                                if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content']))             		
                                 {       	                 
                        	           	modifiedpost_admin($_POST['id'], $_POST['title'], $_POST['content']);
                        	       }                        
                            }
        // supprimer le post
                        elseif ($_GET['action'] == 'deletedpost')
                        	{
                        		if (isset($_GET['id']) && $_GET['id'] > 0)
        	                		{	                    
        	                        	deletedpost_admin($_GET['id']);
        	                    	}
        	                    else
        	                    	{
        	                    		echo 'Erreur : aucun identifiant de billet envoyé. Suppresion impossible' ;
        	                    	}
        	                }           
        // supprimer un commentaire
                        elseif ($_GET['action'] == 'deletecomment')
                            {
                                
                                deletecomment_admin($_GET['id'], $_GET['post_id']);
                            }         
                    }
                else
                {
                    echo 'Erreur : les données sont fausses ou incomplètes'
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
