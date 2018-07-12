<?php

namespace Caro\New_blog_forteroche\Model;

require_once "Manager.php";

class PostManager extends Manager
{
    
    public function addPost($title, $content) //ajoute un post
    {
            $db = $this->dbconnect();
            $addpost = $db->prepare('INSERT INTO posts(title, content, post_date) VALUES(?, ?, NOW())');
            $affectedLines = $addpost->execute(array($title, $content));

        return $affectedLines;      
    }

    public function getlastPost() //récupère le dernier article
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin\') AS post_date_fr FROM posts ORDER BY post_date DESC LIMIT 0, 1');
        $req->execute();
        $lastpost = $req->fetchAll();

         return $lastpost;
    }

    public function getPost($postId) //recupère un post en fonction de son id
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y\') AS post_date_fr FROM posts WHERE id = ?');
        $req-> execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function getPosts() // recupère tous les posts
    {
            $db = $this->dbConnect();
            $req = $db->query('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin\') AS post_date_fr FROM posts ORDER BY post_date DESC');

            return $req;
    }

    public function modifiedPost($postId, $title, $content) // modifie un post
    {
            $db = $this->dbConnect();            
            $modifiedpost = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
            $modifiedLines = $modifiedpost->execute(array('id' => $postId, 'title' => $title,'content' => $content));

        return $modifiedLines;
    }

    public function deletedPost($id) // supprime un post
    {
         $db = $this->dbConnect();
         $no_post = $db->prepare('DELETE FROM posts WHERE id = ?');
         $deletedLines = $no_post->execute(array($id));
         
         return $deletedLines;  
    }
}