<?php

namespace Caro\Projet3\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
	public function getlastPost()
// fonction qui recupere le dernier post du blog
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT posts.id, posts.title, posts.content, chapitres.chapitre_title, DATE_FORMAT(posts.post_date, \'%d/%m/%Y à %Hh%imin\') AS post_date_fr FROM chapitres INNER JOIN posts ON id_chapitre = posts.Nchapitre ORDER BY post_date DESC LIMIT 0, 1');
		$req->execute();

		$lastpost = $req->fetchAll();
		
	return $lastpost;
	}

	public function getPost($postId)
// recupère un post précis en fonction de son id
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT posts.id, posts.title, posts.content, chapitres.chapitre_title, DATE_FORMAT(posts.post_date, \'%d/%m/%Y\') AS post_date_fr FROM chapitres INNER JOIN posts ON id_chapitre = posts.Nchapitre WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();

	return $post;

	}

}

