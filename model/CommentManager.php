<?php

namespace Caro\New_blog_forteroche\Model;

require_once "Manager.php";
require_once "Comment.php";
require_once "Author.php";

use \Caro\New_blog_forteroche\Model\Comment;
use \Caro\New_blog_forteroche\Model\Author;

class CommentManager extends Manager
{
    public function postComment($postId, $author, $content) //fonctionne sans entités
    {
        $db = $this->dbConnect();
        $new_comment = $db->prepare('INSERT INTO comments(id_post, id_author, content, date_comment) VALUES(?, ?, ?, NOW())');
        $affectedLines = $new_comment->execute(array($postId, $author, $content));

        return $affectedLines;
    }

    public function postCommentAuthor($author) //fonctionne sans entités
    {
        $db = $this->dbConnect();
        $new_author = $db->prepare('INSERT INTO authors(pseudo_author) VALUES(?)');
        $new_author->execute(array($author));
        $new_author = $db->lastinsertId();

        return $new_author;
    }

    public function getCommentsForPost($postid) // fonctionne sans entités
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT comments.id_comment, authors.pseudo_author, comments.content, comments.id_post, comments.reporting, DATE_FORMAT(comments.date_comment, \'%d/%m/%Y à %Hh%imin\') AS date_comment_fr FROM comments INNER JOIN authors ON comments.id_author = authors.id_author WHERE id_post = ? ORDER BY date_comment DESC');
        $req->execute(array($postid));
        $result = $req->fetchAll();

        return $result;          
    } 

    public function getComments() // fonctionne sans entités
    {
            $db = $this->dbConnect();
            $comments = $db->query('SELECT comments.id_comment, authors.pseudo_author, comments.content, comments.id_post, comments.reporting, DATE_FORMAT(comments.date_comment, \'%d/%m/%Y\') AS date_comment_fr FROM comments INNER JOIN authors ON comments.id_author = authors.id_author ORDER BY reporting');
            
            return $comments;
    }

    public function deletedComment($comment) //fonctionne avec entités
    {
        $db = $this->dbConnect();
        $no_comment = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
        $deletedLines = $no_comment->execute(array($comment->getIdComment()));
        
        return $deletedLines;
    }

     public function reportComment($commentId) // fonctionne sans entités
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET reporting = 0 WHERE id_comment = :id_comment');
        $req->execute(['id_comment' => $commentId]);
        return $req->rowCount();
    }
}