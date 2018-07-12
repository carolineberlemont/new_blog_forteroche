<?php
session_start();

require 'controller/Controller.php';

$controller = new \Caro\New_blog_forteroche\Backend\Controller\Controller();

try
{     
    if (isset($_GET['action']) AND (isset($_SESSION['login']))) {
        if ($_GET['action'] == 'home') {    
            $controller->homeAdmin();    
        } elseif ($_GET['action'] == 'listposts') {
            $controller->listPostsAdmin();        
        } elseif ($_GET['action'] == 'listcomments') {
            $controller->listCommentsAdmin();
        } elseif ($_GET['action'] == 'newpost') {
            $controller->newPostAdmin();          
        } elseif ($_GET['action'] == 'addpost') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    $controller->addPostAdmin($_POST['title'], $_POST['content']);
            }
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $controller->postAdmin();
            }
        } elseif ($_GET['action'] == 'modified_post') {
            if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])) {
                $controller->modifiedPostAdmin($_POST['id'], $_POST['title'], $_POST['content']);
            }
        } elseif ($_GET['action'] == 'deletedpost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $controller->deletedPostAdmin($_GET['id']);
            }
        } elseif ($_GET['action'] == 'deletedComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {          
                    $controller->deletedCommentAdmin($_GET['id']);      
            }
        } elseif ($_GET['action'] == 'logout') {
            $controller->deletedSession();
        }
    } else {
        if (isset($_GET['action']) AND $_GET['action'] == 'connect') {
            $controller->Connect();
        } else {
            $controller->homeAdmin(); 
        }   
    }
}   
catch(Exeption $e) 
{
    echo 'Erreur : ' . $e->getMessage();
} 
