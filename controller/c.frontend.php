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

function post()
{
    $postManager = new \Caro\Projet3\Model\PostManager();
    $commentManager = new \Caro\Projet3\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']); //appel d'un post selon son id
    $comments = $commentManager->getComments($_GET['id']); // appel des commentaires liés au post

    $lastpost = $postManager->getlastPost(); //appel le dernier post posté pour la side bar

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

