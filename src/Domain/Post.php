<?php

namespace PlatziPHP\Domain;

class Post{
   
    private $id;
    
    private $author;
    
    private $title;
    
    private $body;
      
    //Con Hint le decimos de qué tipo es el parámetro, en este caso $author es de tipo Author
    public function __construct($authorId, $title, $body, $id) {        
        $this ->author = $authorId;
        $this ->title = $title;
        $this ->body = $body;
        $this->id = $id;
    }

    public static function create(Author $author, $title, $body) {
        $post = new Post($author, $title, $body);   
        
        return $post;
    }
    
    public function getTitle(){
        return $this->title;
    }

    public function getBody(){
        return $this->body;
    }
    
    public function getAuthor(){
        return 'by '.$this->author->getFirstName();
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

