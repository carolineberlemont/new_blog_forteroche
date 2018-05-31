<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


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

function post()
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();

    $poster = $postManager->getPost($_GET['id']); //appel d'un post selon son id
    $comments = $commentManager->getComments($_GET['id']); // appel des commentaires liés au post

    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

     require('view/sidebar.php');
     require('view/postView.php');   
}

function addComment($postId, $author, $content)
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $content);
        if ($affectedLines === false) {
            die('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=post&id=' . $postId);
        }

    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/postView.php');

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

function mentionslegales()
{
    $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
    
    $lastpost = $postManager->getlastPost();
    $posts = $postManager->getPosts();

    require('view/sidebar.php');
    require('view/mentionslegales.php');
}

