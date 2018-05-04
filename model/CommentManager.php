<?php

namespace Caro\Projet3\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
	public function getComments($postId)
	// recupère les commentaires associés à un id de post
	{
		    $db = $this->dbConnect();
		    $comments = $db->prepare('SELECT id, author, content, post_id, reporting, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
		   	$comments->execute(array($postId));
		   

		return $comments;
	}

	public function postComment($postId, $author, $comment)
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(post_id, author, content, comment_date) VALUES(?, ?, ?, NOW())');
		$affectedLines = $comment->exectue(array($postId, $author, $comment));

		return $affectedLines;
	}

}