<?php

namespace Caro\New_blog_forteroche\Backend\Controller;

use Caro\New_blog_forteroche\Model\CommentManager;
use Caro\New_blog_forteroche\Model\PostManager;
use Caro\New_blog_forteroche\Model\Post;
use Caro\New_blog_forteroche\Model\Comment;

require_once '../model/PostManager.php' ;
require_once '../model/CommentManager.php';
require_once'../model/Post.php';
require_once'../model/Comment.php';

class Controller
{
    function homeAdmin()
    {
        include 'view/home_admin.php';
    }

    function listPostsAdmin() //fonctionne avec entités
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();   

        $posts = $postManager->getPosts();    

        include 'view/listposts_admin.php';
    }

    function listCommentsAdmin() //fonctionne sans entités
    {
        $commentManager = new \Caro\New_blog_forteroche\Model\commentManager();
         
        $comments = $commentManager->getComments();

        include 'view/listcomments_admin.php';
    }

    function postAdmin() //fonctionne avec entités
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();

        $post = $postManager->getPost($_GET['id']); 

        include 'view/post_admin.php';
    }

    function newPostAdmin()
    {
        include 'view/newpost_admin.php';
    }

    function addPostAdmin($post) // fonctionne avec entités
    {
        $postManager = new PostManager();
        $post = new Post();
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $post->setTitle($_POST['title']);
            $post->setContent($_POST['content']);
        }
        $affectedLines = $postManager->addPost($post);

        $posts = $postManager->getPosts();
        
        include 'view/listposts_admin.php';
    }

    function modifiedPostAdmin($post) // fonctionne avec entités
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();        

        $post = new Post();
        if (isset($_POST['id'])) {
            $post->setId($_POST['id']);
            $post->setTitle($_POST['title']);
            $post->setContent($_POST['content']);
        }

        $modifiedLines = $postManager->modifiedPost($post);
        var_dump($modifiedLines);

        $posts = $postManager->getPosts();    
                
        include 'view/listposts_admin.php';
    }

    function deletedPostAdmin($post) //fonctionne avec entités
    {
        $postManager = new \Caro\New_blog_forteroche\Model\postManager();
        $post = new Post();
        if (isset($_GET['id'])) {
            $post->setId($_GET['id']);
        }
        $deletedLines = $postManager->deletedPost($post);
        $posts = $postManager->getPosts();    

        include 'view/listposts_admin.php';
    }

    function deletedCommentAdmin($comment)// fonctionne ave entités
    {
        $commentManager = new \Caro\New_blog_forteroche\Model\commentManager();
        $comment = new comment();
        if (isset($_GET['id'])) {
            $comment->setIdComment($_GET['id']);
        }
        $deletedCom = $commentManager->deletedComment($comment);
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