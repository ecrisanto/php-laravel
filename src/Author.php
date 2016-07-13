<?php
namespace PlatziPHP;

class Author extends User{
    
    public function __construct($anEmail, $anPassword, $key) {
        parent::__construct($anEmail, $anPassword);
        
        if($key != 'AUTOR_DE_PLATZI'){
            throw new InvalidArgumentException("Invalid key given");
        }
    }
    
    
    public function getLastname(){
        return $this->lastName;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

