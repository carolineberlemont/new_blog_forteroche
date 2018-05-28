<?php

namespace Caro\Projet3\Frontend\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
	public function getlastPost()
// fonction qui recupere le dernier post du blog
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin\') AS post_date_fr FROM posts ORDER BY post_date DESC LIMIT 0, 1');
		$req->execute();

		$lastpost = $req->fetchAll();
		
	return $lastpost;
	}

	public function getPosts()
// fonction qui récupère tous les posts
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date_fr FROM posts ORDER BY post_date DESC');
				
		
    return $req;
	}


	public function getPost($postId)
// recupère un post précis en fonction de son id
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y\') AS post_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();

	return $post;

	}

}

