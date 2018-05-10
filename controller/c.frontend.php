<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function home()
{
    // creation d'un objet
    $postManager = new \Caro\Projet3\Model\PostManager();
    // appel d'une fonction de cet objet : on stock dans la variable $lastpost le resultat de la fonction getlastpost de l'objet $postmanager
    $lastpost = $postManager->getlastPost();

    require('view/frontend/sidebar.php');
    require('view/frontend/home.php');
}

function addcomment()
{
    $postManager = new \Caro\Projet3\Model\PostManager();
    $commentManager = new \Caro\Projet3\Model\CommentManager();

    $post = getPost($_GET['id']);
    $comment = getComments($_GET['id']);
    $affectedLines = $commentManager->postComment($postId, $author, $content);
        if ($affectedLines === false) 
            {
                throw new Exception('Impossible d\'ajouter le commentaire !');
            }
        else 
            {
                header('Location: index.php?action=post&id=' . $postId);
            }
     // récupérer le dernier post pour la sidebar    
    $lastpost = $postManager->getlastPost();

    require('view/frontend/sidebar.php');
    require('view/frontend/postView.php');
}

function bio()
{
    $postManager = new \Caro\Projet3\Model\PostManager();
    $lastpost = $postManager->getlastPost();

    require('view/frontend/sidebar.php');
    require('view/frontend/bio.php');
}

function contact()
{
    $postManager = new \Caro\Projet3\Model\PostManager();
    $lastpost = $postManager->getlastPost();

    require('view/frontend/sidebar.php');
    require('view/frontend/contact.php');
}

function mentionslegales()
{
    $postManager = new \Caro\Projet3\Model\PostManager();
    $lastpost = $postManager->getlastPost();

    require('view/frontend/sidebar.php');
    require('view/frontend/mentionslegales.php');
}

