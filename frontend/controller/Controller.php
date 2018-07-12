<?php

namespace Caro\New_blog_forteroche\Frontend\Controller;

use \Caro\New_blog_forteroche\Model\PostManager;
use \Caro\New_blog_forteroche\Model\CommentManager;

require_once'../model/PostManager.php';
require_once'../model/CommentManager.php';

class Controller
{
    public function home()
    {
        
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
        
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/home.php';
    }

    public function post($postId, $author=null, $content=null, $commentId=null)
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
        $commentManager = new \Caro\New_blog_forteroche\Model\CommentManager();
     
        if ($author != null && $content != null) {
            $affectedAuthor = $commentManager->postCommentAuthor($author);
            $affectedLines = $commentManager->postComment($postId, $affectedAuthor, $content);
        }

        if ($commentId != null) {
            if (($reporting = $commentManager->reportComment($commentId))== 1) {
                    $flash['error']= false;
                    $flash['content']= 'le commentaire a bien été signalé';
            } else {
                    $flash['error']= true;
                    $flash['content']= 'une erreur s\'est produite, veuillez essayer de nouveau';
            } 
        }
     
        $poster = $postManager->getPost($postId); //appel d'un post selon son id
        $comments = $commentManager->getCommentsForPost($postId);
     
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();
     
        include 'view/sidebar.php';
        include 'view/postView.php';
    }

    // public function addComment($postId, $author, $content)
    // {
    //     $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
    //     $commentManager = new \Caro\New_blog_forteroche\Model\CommentManager();
    //         // appel des commentaires liés au post
    //     $affectedAuthor = $commentManager->postCommentAuthor($author);
    //     $affectedLines = $commentManager->postComment($postId, $affectedAuthor, $content);
    //     $poster = $postManager->getPost($postId); //appel d'un post selon son id
    //     $comments = $commentManager->getCommentsForPost($postId); 

    //     $lastpost = $postManager->getlastPost();
    //     $posts = $postManager->getPosts();

    //     include 'view/sidebar.php';
    //     include 'view/postView.php';
    // }

    // public function reporting($commentId, $postId)
    // {   
    //     $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
    //     $commentManager = new \Caro\New_blog_forteroche\Model\CommentManager();
           
    //     if (($reporting = $commentManager->reportComment($commentId))== 1) {
    //             $flash['error']= false;
    //             $flash['content']= 'le commentaire a bien été signalé';
    //     } else {
    //             $flash['error']= true;
    //             $flash['content']= 'une erreur s\'est produite, veuilliez essayer de nouveau';
    //     } 

    //     $poster = $postManager->getPost($postId);
    //     $comments = $commentManager->getCommentsForPost($postId); 
        
    //     $lastpost = $postManager->getlastPost();
    //     $posts = $postManager->getPosts();

    //     include 'view/sidebar.php';
    //     include 'view/postview.php';
    // }

    public function bio()
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/bio.php';
    }

    public function contact()
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/contact.php';
    }

    public function sendemail($subject, $message, $header_name, $header_from)
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
        
        if ($mail = mail('carolineberlemont@gmail.com', $subject, $message, $header_name, $header_from)) {
                $flash['error']= false;
                $flash['content']= 'le mail a bien été envoyé';
        } else {
                $flash['error']= true;
                $flash['content']= 'une erreur s\'est produite, veuilliez essayer de nouveau';
        }

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/contact.php';
    }

    public function mentionslegales()
    {
        $postManager = new \Caro\New_blog_forteroche\Model\PostManager();
        
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        include 'view/sidebar.php';
        include 'view/mentionslegales.php';
    }
}