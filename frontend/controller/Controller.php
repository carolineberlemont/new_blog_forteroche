<?php

namespace Caro\New_blog_forteroche\Frontend\Controller;

use \Caro\New_blog_forteroche\Model\PostManager;
use \Caro\New_blog_forteroche\Model\CommentManager;
// use \Caro\New_blog_forteroche\Model\Comment;
// use \Caro\New_blog_forteroche\Model\author;

require_once'../model/PostManager.php';
require_once'../model/CommentManager.php';
// require_once'../model/Comment.php';
// require_once'../model/Author.php';

class Controller
{
    public function addComment($postId, $author, $content) //fonctionne sans entités
    {
        $commentManager = new \Caro\New_blog_forteroche\Model\CommentManager();
            // appel des commentaires liés au post        
        $affectedAuthor = $commentManager->postCommentAuthor($author);
        $affectedLines = $commentManager->postComment($postId, $affectedAuthor, $content);
      
        header('Location: index.php?action=post&id='.$postId);
    }

    public function post($postId) // fonctionne avec et sans entités
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
        $commentManager = new \Caro\New_blog_forteroche\Model\CommentManager();
     
        $poster = $postManager->getPost($postId); //appel d'un post selon son id
        $comments = $commentManager->getCommentsForPost($postId);
     
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();
     
        include 'view/sidebar.php';
        include 'view/postView.php';
    }

    public function home() // fonctionne avec entités
    {        
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
      
        $lastpost = $postManager->getlastPost();       
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/home.php';
    }

    public function reporting($postId, $commentId) //fonctionne principalement sans entités
    {   
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
        $commentManager = new \Caro\New_blog_forteroche\Model\CommentManager();
           
        if (($reporting = $commentManager->reportComment($commentId))== 1) {
                $flash['error']= false;
                $flash['content']= 'le commentaire a bien été signalé';
        } else {
                $flash['error']= true;
                $flash['content']= 'une erreur s\'est produite, veuillez essayer de nouveau';
        } 

        $poster = $postManager->getPost($postId);
        $comments = $commentManager->getCommentsForPost($postId); 
        
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/postview.php';
    }

    public function bio() //fonctionne avec entités
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/bio.php';
    }

    public function contact() //fonctionne avec entités
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/contact.php';
    }

    public function sendemail($subject, $message, $name, $email) //fonctionne avec entités
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
        $headers='From: "'.$name.'" <'.$email.'>';

        $mail = mail('carolineberlemont@gmail.com', $subject, $message, $headers); 
        
        if ($mail) {
                $flash['error']= false;
                $flash['content']= 'le mail a bien été envoyé';
        } else {
                $flash['error']= true;
                $flash['content']= 'une erreur s\'est produite, veuillez essayer de nouveau';
        }

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/contact.php';
    }
}