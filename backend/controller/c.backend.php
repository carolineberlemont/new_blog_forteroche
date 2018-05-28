<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function home_admin()
{
    require('view/home_admin.php');
}
function listposts_admin()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();   

    $posts = $postManager->getPosts(); 
   
    require('view/listposts_admin.php');
}

function post_admin()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']); //appel d'un post selon son id
    $comments = $commentManager->getComments($_GET['id']); // appel des commentaires liés au post

    require('view/post_admin.php');
}

function newpost_admin()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    require('view/newpost_admin.php');
}

function addpost_admin($title, $content)
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    $affectedLines = $postManager->addPost($title, $content);

    require('view/addpost_admin.php');
}

function modifiedpost_admin($postID, $title, $content)
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

    $modifiedLines = $postManager->modifiedPost($postID, $title, $content);
    $post = $postManager->getPost($_POST['id']);
    $comments = $commentManager->getComments($_POST['id']); 

    require('view/modifiedpost_admin.php');
}

function deletedpost_admin($id)
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    $deletedLines = $postManager->deletedPost($id);

    require('view/deletedpost_admin.php');
}

function deletecomment_admin($id, $postid)
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

    $deletedLines = $commentManager->deleteComment($id);
    $post = $postManager->getPost($postid);
    $comments = $commentManager->getComments($postid); 

    require('view/deletecomment_admin.php');
}




