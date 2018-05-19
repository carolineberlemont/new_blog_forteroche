<?php

namespace Caro\Projet3\Frontend\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
	public function getComments($postId)
	// recupère les commentaires associés à un id de post
	{
		    $db = $this->dbConnect();
		    $comments = $db->prepare('SELECT comments.id, authors.pseudo_author, comments.content, comments.post_id, comments.reporting, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments INNER JOIN authors ON comments.author = authors.id_author WHERE post_id = ? ORDER BY comment_date DESC');
		   	$comments->execute(array($postId));		   

		return $comments;
	}

	public function postComment($postId, $author, $content)
	// poster de nouveaux commentaires
	{
		$db = $this->dbConnect();
		$new_comments = $db->prepare('INSERT INTO comments(post_id, author, content, comment_date) VALUES(?, ?, ?, NOW())');
		$affectedLines = $new_comment->exectue(array($postId, $author, $content));

		return $affectedLines;
	}

}