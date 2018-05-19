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

function addpost()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    $addpost = $postManager->addPost(); 

    require('view/addpost_admin.php');

}

function mentionslegales()
{
    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

    require('view/mentionslegales.php');
}


