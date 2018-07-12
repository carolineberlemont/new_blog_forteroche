<?php

namespace Caro\New_blog_forteroche\Backend\Controller;

use Caro\New_blog_forteroche\Model\CommentManager;
use Caro\New_blog_forteroche\Model\PostManager;

require_once '../model/PostManager.php' ;
require_once '../model/CommentManager.php';

class Controller
{
    function homeAdmin()
    {
        include 'view/home_admin.php';
    }

    function listPostsAdmin()
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();   

        $posts = $postManager->getPosts();    

        include 'view/listposts_admin.php';
    }

    function listCommentsAdmin()
    {
        $commentManager = new \Caro\New_blog_forteroche\Model\commentManager();
         
        $comments = $commentManager->getComments();

        include 'view/listcomments_admin.php';
    }

    function postAdmin()
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();

        $post = $postManager->getPost($_GET['id']); 

        include 'view/post_admin.php';
    }

    function newPostAdmin()
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();

        include 'view/newpost_admin.php';
    }

    function addPostAdmin($title, $content)
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();
        
        $affectedLines = $postManager->addPost($title, $content);
        $posts = $postManager->getPosts();
        
        include 'view/listposts_admin.php';
    }

    function modifiedPostAdmin($postID, $title, $content)
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();
        $commentManager = new \Caro\New_blog_forteroche\Model\commentManager();

        $modifiedLines = $postManager->modifiedPost($postID, $title, $content);
        $posts = $postManager->getPosts();    
        $post = $postManager->getPost($_POST['id']);
        $comments = $commentManager->getComments($_POST['id']); 

        include 'view/listposts_admin.php';
    }

    function deletedPostAdmin($id)
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();

        $deletedLines = $postManager->deletedPost($id);
        $posts = $postManager->getPosts();    

        include 'view/listposts_admin.php';
    }

    function deletedCommentAdmin($id)
    {
        $commentManager = new \Caro\New_blog_forteroche\Model\commentManager();
        ;
        $deletedCom = $commentManager->deletedComment($id);
        $comments = $commentManager->getComments();       

        include 'view/listcomments_admin.php';
    }

    function connect()
    {
        $login = "forteroche";
        $password = "baleineau";

        if (isset($_POST['login']) && isset($_POST['password'])) {
            if ($login == $_POST['login'] && $password == $_POST['password']) {
                                       
                            $_SESSION['login'] = $_POST['login'];
                            $_SESSION['password'] = $_POST['password'];

                     header('Location: index_admin.php?action=listposts');
            } else {
                    echo 'Vous avez fait une erreur ! Merci de recommencer';

            }
        } else {
                echo 'Vous avez fait une erreur ! Merci de recommencer';

        }
    }

    function deletedSession()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: index_admin.php');
    }
}