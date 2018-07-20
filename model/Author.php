<?php

namespace Caro\New_blog_forteroche\Model;

class Author
{
  // properties

  private $id_author;
  private $pseudo_author;

  // getters
// Le rôle de getId() va simplement être de récupérer la valeur contenue dans la propriété $id pour un objet en particulier.

  public function getIdAuthor(){ 
    return $this->id_author; 
  }

  public function getPseudoAuthor(){ 
    return $this->pseudo_author; 
  }

  // setters
  // Le rôle de setId() va être de définir ou de modifier la valeur de la propriété $id relative à une instance de notre classe.

  public function setIdAuthor($idAuthor){
    $this->id_author = $id_author;
    return $this;
  }
  
  public function setPseudoAuthor($pseudoAuthor){ 
    $this->pseudo_author = $pseudo_author; 
    return $this;
  }
}
