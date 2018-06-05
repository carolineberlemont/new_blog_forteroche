<?php

namespace Caro\Projet3\Frontend\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
	public function getComments($postId)
	// recupère les commentaires associés à un id de post
	{
		    $db = $this->dbConnect();
		    $comments = $db->prepare('SELECT comments.id, authors.pseudo_author, comments.content, comments.post_id, comments.reporting, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments INNER JOIN authors ON comments.id_author = authors.id_author WHERE post_id = ? ORDER BY comment_date DESC');
		   	$comments->execute(array($postId));		   

		return $comments;
	}

	public function postComment($authorId, $postId, $content)
	// poster de nouveaux commentaires
	{
		$db = $this->dbConnect();
		$new_comment = $db->prepare('INSERT INTO comments(id_author, post_id, content, comment_date) VALUES(?, ?, ?, NOW())');
		$new_comment->execute(array($authorId, $postId, $content));
		
		return $new_comment;
		// retourne la valeur de la fonction execute : false /true
	}

	public function postCommentAuthor($author)
	{
		$db = $this->dbConnect();
		$new_author = $db->prepare('INSERT INTO authors(pseudo_author) VALUES(?)');
		$new_author->execute(array($author));

		return $new_author;
	}

	// public function reportComment($commentId)
	// //pour signaler un commentaire, récupère un commentaire précis
	// {
	// 	$db = $this->dbConnect
	// 	$req = $db->prepare('SELECT comments.id, authors.pseudo_author, comments.content, comments.post_id, comments.reporting, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments INNER JOIN authors ON comments.author = authors.id_author WHERE id = ?');
	// 	$req->execute(array($commentId));
	// 	$reportcomment = $req->fetch();

	// 	return $reportcomment;

	// }

}