<?php

namespace Caro\New_blog_forteroche\Model;

require_once "Manager.php";
require_once "Post.php";

use \Caro\New_blog_forteroche\Model\Post;

class PostManager extends Manager
{
    
    public function addPost($post) //fonctionne
    {
        $db = $this->dbConnect();
        $addpost = $db->prepare('INSERT INTO posts(title, content, post_date) VALUES(?, ?, NOW())');
        $affectedLines = $addpost->execute(array($post->getTitle(), $post->getContent()));

        return $affectedLines;  
   }

    public function getlastPost() //fonctionne
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin\') AS post_date_fr FROM posts ORDER BY post_date DESC LIMIT 0, 1');
        $req->execute();
        $lastpost = $req->fetch();

        $post = new Post();
        $post->setId($lastpost['id'])->setTitle($lastpost['title'])->setPostDate($lastpost['post_date_fr'])->setContent($lastpost['content']);

        return $post;
    }

    public function getPost($postId) //fonctionne avec entités
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y\') AS post_date_fr FROM posts WHERE id = ?');
        $req-> execute(array($postId));
        $result = $req->fetch();

        $post = new Post(); 
        $post->setId($result['id'])->setTitle($result['title'])->setPostDate($result['post_date_fr'])->setContent($result['content']);       
        return $post;
    }

    public function getPosts() // fonctionne avec entités
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin\') AS post_date_fr FROM posts ORDER BY post_date DESC');
        $result = $req->fetchAll();

        $articles = array();
        foreach($result as $row) {
        $post = new Post();
        $post->setId($row['id'])->setTitle($row['title'])->setPostDate($row['post_date_fr'])->setContent($row['content']);
        $articles[]=$post;
        }
        return $articles;
    }

    public function modifiedPost($post) // fonctionne avec entités
    {
            $db = $this->dbConnect();            
            $modifiedpost = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
            $modifiedLines = $modifiedpost->execute([
              'id' => $post->getId(),
              'title' => $post->getTitle(),
              'content' => $post->getContent()
            ]);

        return $modifiedLines;
    }

    public function deletedPost($post) // fonctionne avec entités
    {
         $db = $this->dbConnect();
         $no_post = $db->prepare('DELETE FROM posts WHERE id = ?');
         $deletedLines = $no_post->execute(array($post->getId()));
         
         return $deletedLines;  
    }
}