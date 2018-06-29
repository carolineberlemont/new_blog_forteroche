<?php

namespace Caro\Projet3\Backend\Model;

require_once('model/Manager.php');

class PostManager extends Manager
{
	public function getPosts()
		{
			$db = $this->dbConnect();
			$req = $db->query('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin\') AS post_date_fr FROM posts ORDER BY post_date DESC');

			return $req;
		}

	public function getPost($postId)
// recupère un post précis en fonction de son id
		{
			$db = $this->dbConnect();
			$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y\') AS post_date_fr FROM posts  WHERE id = ?');
			$req->execute(array($postId));
			$post = $req->fetch();

		return $post;
		}

	public function addPost($title, $content)
		{
			$db = $this->dbConnect();
			$addpost = $db->prepare('INSERT INTO posts(title, content, post_date) VALUES(?, ?, NOW())');
			$affectedLines = $addpost->execute(array($title, $content));

		return $affectedLines;		
		}

	public function modifiedPost($postId, $title, $content)
		{
			$db = $this->dbConnect();
			
			$modifiedpost = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
			$modifiedLines = $modifiedpost->execute(array('id' => $postId, 'title' => $title,'content' => $content));

		return $modifiedLines;
		}

	public function deletedPost($id)
 {
 $db = $this->dbConnect();
var_dump($db);
var_dump($id);
 $no_post = $db->prepare('DELETE FROM posts WHERE id = ?');
var_dump($no_post);
 $deletedLines = $no_post->execute(array($id));
 
 return $deletedLines;	
}
}
