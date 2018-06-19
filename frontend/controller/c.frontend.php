<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/MessageFlashManager.php');


function home()
{
    // creation d'un objet
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    // appel d'une fonction de cet objet : on stock dans la variable $lastpost le resultat de la fonction getlastpost de l'objet $postmanager
    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/home.php');
}

function post($postId)
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();

    $poster = $postManager->getPost($postId); 
    $comments = $commentManager->getComments($postId);
    
    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

     require('view/sidebar.php');
     require('view/postView.php');   
}

function addComment($postId, $author, $content)
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();
        // appel des commentaires liés au post
    $affectedAuthor = $commentManager->postCommentAuthor($author);
    $affectedLines = $commentManager->postComment($affectedAuthor, $postId, $content);
    $poster = $postManager->getPost($postId); //appel d'un post selon son id
    $comments = $commentManager->getComments($postId); 

    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/addcomment.php');
}

function reporting($commentId, $postId, $message, $error_message)
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();
    $messageflashManager = new \Caro\Projet3\Frontend\Model\MessageFlashManager();

    $poster = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId); 

    $reporting = $commentManager->reportComment($commentId);
    $messageflash = $messageflashManager->mflash($message, $error_message)
    $message = "Le commentaire a bien été signalé";
    $error_message = "Une erreur s'est produite, veuilliez essayer de nouveau";
    
    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/postview.php');
}

function bio()
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();

    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/bio.php');
}

function contact()
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();

    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/contact.php');
}

function sendemail ($subject, $message, $header_name, $header_from)
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();

    $mail = mail('carolineberlemont@gmail.com', $subject, $message, $header_name, $header_from);

    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/contact.php');
}

function mentionslegales()
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    
    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/mentionslegales.php');
}

