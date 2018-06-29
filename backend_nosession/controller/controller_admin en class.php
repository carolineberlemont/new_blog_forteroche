<?php

namespace Caro\Projet3\Backend\controller;

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

// faut il mettre les fonctions en prive ou en public dans le backend? au cas par cas ?

class Controller
{
	public function home_admin()
	{
		require('view/home_admin.php');
	}

	public function listPosts_admin()
	{
	    $postManager = new \Caro\Projet3\Backend\Model\PostManager();   
	    
	    $posts = $postManager->getPosts();    
	   
	    require('view/listposts_admin.php');
	}

	public function listComments_admin()
	{
	    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

	    $comments = $commentManager->getComments();

	    require('view/listcomments_admin.php');
	}

	public function post_admin()
	{
	    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
	    
	    $post = $postManager->getPost($_GET['id']); //appel d'un post selon son id
	    
	    require('view/post_admin.php');
	}

	public function newPost_admin()
	{
	    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

	    require('view/newpost_admin.php');
	}

	public function addPost_admin($title, $content)
	{
	    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

	    $posts = $postManager->getPosts();
	    $affectedLines = $postManager->addPost($title, $content);

	    require('view/listposts_admin.php');
	}

	public function modifiedPost_admin($postID, $title, $content)
	{
	    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
	    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

	    $posts = $postManager->getPosts();
	    $modifiedLines = $postManager->modifiedPost($postID, $title, $content);
	    $post = $postManager->getPost($_POST['id']);
	    $comments = $commentManager->getComments($_POST['id']); 

	    require('view/listposts_admin.php');
	}

	public function deletedpost_admin($id)
	{
	    $postManager = new \Caro\Projet3\Backend\Model\PostManager();

	    $posts = $postManager->getPosts();
	    $deletedLines = $postManager->deletedPost($id);

	    require('view/listposts_admin.php');
	}

	public function deletecomment_admin($id, $postid)
	{
	    $postManager = new \Caro\Projet3\Backend\Model\PostManager();
	    $commentManager = new \Caro\Projet3\Backend\Model\CommentManager();

	    $deletedLines = $commentManager->deleteComment($id);
	    $post = $postManager->getPost($postid);
	    $comments = $commentManager->getComments($postid); 

	    require('view/deletecomment_admin.php');
	}
}