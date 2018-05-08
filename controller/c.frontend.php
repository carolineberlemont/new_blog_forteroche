<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function lastPost()
{
    // creation d'un objet
    $postManager = new \Caro\Projet3\Model\PostManager();
    // appel d'une fonction de cet objet
    $lastpost = $postManager->getlastPost();

    require('view/frontend/sidebar.php');
}

function post()
{
    $postManager = new \Caro\Projet3\Model\PostManager();
    $commentManager = new \Caro\Projet3\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \Caro\Projet3\Model\CommentManager();


    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}