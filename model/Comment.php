<?php

namespace Caro\New_blog_forteroche\Model;

class Comment
{
  // properties

  private $id_comment;
  private $id_author;
  private $date_comment;
  private $content;
  private $id_post; 
  private $reporting;

  // getters

  public function getIdComment(){ 
    return $this->id_comment; 
  }

  public function getIdAuthor(){ 
    return $this->id_author; 
  }

  public function getDateComment(){ 
    return $this->date_comment; 
  }

  public function getContent(){ 
    return $this->content; 
  }

  public function getIdPost(){ 
    return $this->id_post; 
  }

    public function getReporting(){ 
      return $this->reporting; 
  }

  // setters

  public function setIdComment($idComment){
    $this->id_comment = $idComment;
    return $this;
  }

  public function setIdAuthor($idAuthor){
    $this->id_author = $idAuthor;
    return $this;
  }

  public function setDateComment($dateComment){ 
    $this->date_comment = $dateComment; 
    return $this;
  }

  public function setContent($content){ 
    $this->content = $content; 
    return $this;
  }

  public function setIdPost($idPost){
    $this->id_post = $idPost;
    return $this;
  }

  public function setReporting($reporting){ 
    $this->reporting = $reporting; 
    return $this;
  }

  public static function createComment($postId, $authorId, $content){
    // pour créer un objet à l'interieur même de la class
    $comment = new Self();
    $comment->id_post = $postId;
    $comment->id_author = $authorId;
    $comment->content = $content;
  }
}
