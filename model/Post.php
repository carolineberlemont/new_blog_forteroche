<?php

namespace Caro\New_blog_forteroche\Model;

class Post
{
  // properties

  private $id;
  private $title;
  private $post_date;
  private $content;


  // getters
// Le rôle de getId() va simplement être de récupérer la valeur contenue dans la propriété $id pour un objet en particulier.

  public function getId(){ 
    return $this->id; 
  }

  public function getTitle(){ 
    return $this->title; 
  }

  public function getPostDate(){
   return $this->post_date; 
 }
  public function getContent(){ 
    return $this->content; 
  }

  // setters
  // Le rôle de setId() va être de définir ou de modifier la valeur de la propriété $id relative à une instance de notre classe.

  public function setId($id){
    $this->id = $id;
    return $this;
  }
  
  public function setTitle($title){ 
    $this->title = $title; 
    return $this;
  }

  public function setPostDate($postDate){ 
    $this->post_date = $postDate; 
    return $this;
  }

  public function setContent($content){ 
    $this->content = $content; 
    return $this;
  }
}