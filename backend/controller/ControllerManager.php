<?php

namespace Caro\Projet3\Backend\controller;

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class Controller
		{
		function home_admin()
		{
		require('view/home_admin.php');
		}

		function listPosts_admin()
		{
		$postManager = new \Caro\Projet3\Backend\Model\postManager();   

		$posts = $postManager->getPosts();    

		require('view/listposts_admin.php');
		}

		function listComments_admin()
		{
		$commentManager = new \Caro\Projet3\Backend\Model\commentManager();
		 
		$comments = $commentManager->getComments();

		require('view/listcomments_admin.php');
		}

		function post_admin()
		{
		$postManager = new \Caro\Projet3\Backend\Model\postManager();

		$post = $postManager->getPost($_GET['id']); //appel d'un post selon son id

		require('view/post_admin.php');
		}

		function newPost_admin()
		{
		$postManager = new \Caro\Projet3\Backend\Model\postManager();

		require('view/newpost_admin.php');
		}

		function addPost_admin($title, $content)
		{
		$postManager = new \Caro\Projet3\Backend\Model\postManager();

		$posts = $postManager->getPosts();
		$affectedLines = $postManager->addPost($title, $content);

		require('view/listposts_admin.php');
		}

		function modifiedPost_admin($postID, $title, $content)
		{
		$postManager = new \Caro\Projet3\Backend\Model\postManager();
		$commentManager = new \Caro\Projet3\Backend\Model\commentManager();

		$modifiedLines = $postManager->modifiedPost($postID, $title, $content);
		$posts = $postManager->getPosts();    
		$post = $postManager->getPost($_POST['id']);
		$comments = $commentManager->getComments($_POST['id']); 

		require('view/listposts_admin.php');
		}

		function deletedpost_admin($id)
		{
		$postManager = new \Caro\Projet3\Backend\Model\postManager();

		$deletedLines = $postManager->deletedPost($id);
		$posts = $postManager->getPosts();    

		require('view/listposts_admin.php');
		}

		function deletedComment_admin($id)
		{
		$commentManager = new \Caro\Projet3\Backend\Model\commentManager();
		;
		$deletedCom = $commentManager->deletedComment($id);
		$comments = $commentManager->getComments();       

		require('view/listcomments_admin.php');
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
		            }
		        else {
		            echo 'Vous avez fait une erreur ! Merci de recommencer.';
		        }
		    }
		else {
		        echo 'Les variables du formulaire ne sont pas déclarées.';
		    }
		}

		function deletedSession()
		{
		session_start ();
		session_unset ();
		session_destroy ();
		header ('location: index_admin.php');
		}
}