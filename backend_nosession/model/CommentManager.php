<?php

namespace Caro\Projet3\Backend\Model;

require_once('model/Manager.php');

class CommentManager extends Manager
{
	public function getComments()
	// recupère les commentaires
	{
		    $db = $this->dbConnect();
		    $comments = $db->query('SELECT comments.id_comment, authors.pseudo_author, comments.content, comments.id_post, comments.reporting, DATE_FORMAT(comments.date_comment, \'%d/%m/%Y\') AS date_comment_fr FROM comments INNER JOIN authors ON comments.id_author = authors.id_author ORDER BY reporting');
		 	
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

	public function deletedComment($id)
	{
		$db = $this->dbConnect();
		$no_comment = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
		$deletedLines = $no_comment->execute(array($id));
		
		return $deletedLines;
	}

}