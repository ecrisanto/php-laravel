<?php
namespace PlatziPHP;

class Email{
        
    //$address es la dirección de email
    private $address;
    
    public function __construct($address) {
        
        
        //filtr_var es una función nativa de PHP para validad e-mail
        if(!filter_var($address, FILTER_VALIDATE_EMAIL)){
            throw new \InvalidArgumentException(
                    "Invalid email address: [$address]"
            );
        }
        
        $this->address = $address;
    }
    
    public function getAddres(){
    
        return $this->address;                
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

