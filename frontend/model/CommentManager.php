<?php

namespace Caro\Projet3\Frontend\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
	public function getComments($postId)
	// recupère les commentaires associés à un id de post
	{
		    $db = $this->dbConnect();
		    $comments = $db->prepare('SELECT comments.id_comment, authors.pseudo_author, comments.content, comments.id_post, comments.reporting, DATE_FORMAT(comments.date_comment, \'%d/%m/%Y à %Hh%imin\') AS date_comment_fr FROM comments INNER JOIN authors ON comments.id_author = authors.id_author WHERE id_post = ? ORDER BY date_comment DESC');
		   	$comments->execute(array($postId));		   

		return $comments;
	}

	public function postComment($authorId, $postId, $content)
	// poster de nouveaux commentaires
	{
		$db = $this->dbConnect();
		$new_comment = $db->prepare('INSERT INTO comments(id_author, id_post, content, date_comment) VALUES( ?, ?, ?, NOW())');
		$new_comment->execute(array($authorId, $postId, $content));

		return $new_comment;
	}

	public function postCommentAuthor($author)
	{
		$db = $this->dbConnect();
		$new_author = $db->prepare('INSERT INTO authors(pseudo_author) VALUES(?)');
		$new_author->execute(array($author));
		$new_author = $db->lastinsertId();

		return $new_author;
	}

	public function reportComment($commentId)
	//pour signaler un commentaire, récupère un commentaire précis
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET reporting = 0 WHERE id_comment = :id_comment');
		$req->execute(['id_comment' => $commentId]);
		
		return $req;
	}

}