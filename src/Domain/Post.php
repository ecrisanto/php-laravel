<?php

namespace PlatziPHP\Domain;

class Post{
    
    private $author;
    
    private $title;
    
    private $body;
      
    //Con Hint le decimos de qué tipo es el parámetro, en este caso $author es de tipo Author
    public function __construct(Author $author, $title, $body) {
        $this ->author = $author;
        $this ->title = $title;
        $this ->body = $body;
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

