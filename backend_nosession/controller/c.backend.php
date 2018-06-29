<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function home_admin()
{
    require('view/home_admin.php');
}

function listPosts_admin()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();   
    
    $posts = $postManager->getPosts();    
   
    require('view/listposts_admin.php');
}

function listComments_admin()
{
    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();
     
    $comments = $commentManager->getComments();
    
    require('view/listcomments_admin.php');
}

function post_admin()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
    
    $post = $postManager->getPost($_GET['id']); //appel d'un post selon son id
    
    require('view/post_admin.php');
}

function newPost_admin()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    require('view/newpost_admin.php');
}

function addPost_admin($title, $content)
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    $posts = $postManager->getPosts();
    $affectedLines = $postManager->addPost($title, $content);

    require('view/listposts_admin.php');
}

function modifiedPost_admin($postID, $title, $content)
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

    $modifiedLines = $postManager->modifiedPost($postID, $title, $content);
    $posts = $postManager->getPosts();    
    $post = $postManager->getPost($_POST['id']);
    $comments = $commentManager->getComments($_POST['id']); 

    require('view/listposts_admin.php');
}

function deletedpost_admin($id)
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    $deletedLines = $postManager->deletedPost($id);
    $posts = $postManager->getPosts();    

    require('view/listposts_admin.php');
}

function deletedComment_admin($id)
{
    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

    $deletedCom = $commentManager->deletedComment($id);
    $comments = $commentManager->getComments();       

    require('view/listcomments_admin.php');
}

function delatedSession()
{
    session_start ();
    session_unset ();
    session_destroy ();
    header ('location: index_admin.php');
}