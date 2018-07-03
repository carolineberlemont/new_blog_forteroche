<?php
session_start ();

require('controller/ControllerManager.php');

$controller = new \Caro\Projet3\Backend\controller\Controller ();

try
{     
    if (isset($_GET['action']) AND (isset($_SESSION['login']))) {
        if ($_GET['action'] == 'home') {    
            $controller->home_admin();    
        }
     
        if ($_GET['action'] == 'listposts') {
            $controller->listPosts_admin();        
        }
        
        if ($_GET['action'] == 'listcomments') {
            $controller->listComments_admin();
        }
        
        elseif ($_GET['action'] == 'newpost') {
            $controller->newPost_admin();          
        }

        elseif ($_GET['action'] == 'addpost') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    $controller->addpost_admin($_POST['title'], $_POST['content']);
            }
        }

        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0){
                    $controller->post_admin();
            }
        }

        elseif ($_GET['action'] == 'modified_post') {
            if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])){
                $controller->modifiedpost_admin($_POST['id'], $_POST['title'], $_POST['content']);
            }
        }

            elseif ($_GET['action'] == 'deletedpost') {
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    $controller->deletedpost_admin($_GET['id']);
            }
        }

        elseif ($_GET['action'] == 'deletedComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0){                                
                    $controller->deletedComment_admin($_GET['id']);      
            }
        }

        elseif ($_GET['action'] == 'logout'){
            $controller->deletedSession();
        }

    }
    else {
        if (isset($_GET['action']) AND $_GET['action'] == 'connect') {
            $controller->connect();
        }
        else {
        $controller->home_admin(); 
        }   
    }

}   

catch(Exeption $e) 
{
    echo 'Erreur : ' . $e->getMessage();
} 
