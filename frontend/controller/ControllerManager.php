<?php

namespace Caro\Projet3\Frontend\controller;

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class Controller
{
    public function home()
    {
        
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
        
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        require('view/sidebar.php');
        require('view/home.php');
    }

    public function post($postId)
    {
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
        $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();

        $poster = $postManager->getPost($postId); 
        $comments = $commentManager->getComments($postId);
        
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

         require('view/sidebar.php');
         require('view/postView.php');   
    }

    public function addComment($postId, $author, $content)
    {
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
        $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();
            // appel des commentaires liés au post
        $affectedAuthor = $commentManager->postCommentAuthor($author);
        $affectedLines = $commentManager->postComment($affectedAuthor, $postId, $content);
        $poster = $postManager->getPost($postId); //appel d'un post selon son id
        $comments = $commentManager->getComments($postId); 

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        require('view/sidebar.php');
        require('view/postView.php');
    }

    public function reporting($commentId, $postId)
    {   
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
        $commentManager = new \Caro\Projet3\Frontend\Model\CommentManager();
        $messageflashManager = new \Caro\Projet3\Frontend\Model\MessageFlashManager();

        $poster = $postManager->getPost($postId);
        $comments = $commentManager->getComments($postId); 

            
            if (($reporting = $commentManager->reportComment($commentId))== 1)
            {
                $flash['error']= false;
                $flash['content']= 'le commentaire a bien été signalé';
            }
            else
            {
                $flash['error']= true;
                $flash['content']= 'une erreur s\'est produite, veuilliez essayer de nouveau';
            }   
        
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        require('view/sidebar.php');
        require('view/postview.php');
    }

    public function bio()
    {
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        require('view/sidebar.php');
        require('view/bio.php');
    }

    public function contact()
    {
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        require('view/sidebar.php');
        require('view/contact.php');
    }

    public function sendemail ($subject, $message, $header_name, $header_from)
    {
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();

        // $mail = mail('carolineberlemont@gmail.com', $subject, $message, $header_name, $header_from);
        // je dois pouvoir enlever cette ligne puisu'elle apparait dans le if
        
        if ($mail = mail('carolineberlemont@gmail.com', $subject, $message, $header_name, $header_from))
            {
                $flash['error']= false;
                $flash['content']= 'le mail a bien été envoyé';
            }
            else
            {
                $flash['error']= true;
                $flash['content']= 'une erreur s\'est produite, veuilliez essayer de nouveau';
            }

        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        require('view/sidebar.php');
        require('view/contact.php');
    }

    public function mentionslegales()
    {
        $postManager = new \Caro\Projet3\Frontend\Model\PostManager();
        
        $lastpost = $postManager->getlastPost();
        $posts = $postManager->getPosts();

        require('view/sidebar.php');
        require('view/mentionslegales.php');
    }
}