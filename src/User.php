<?php
namespace PlatziPHP;

class User
{
    //Otros objetos no puede ver estos datos.
    
    /**
     *
     * @var type sring
     */    
    private $email;
    
    /**
     *
     * @var type string
     */
    private $password;
    
    /**
     *
     * @var type string
     */
    private $firstName;
    
    /**
     *
     * @var type string
     */
    private $lastName;
    
    
    //Cosntructor del objeto
    public function __construct($anEmail , $anPassword) {
        // email variable de método, $anEmail, parámetro de función.
        $this->email = $anEmail;
        $this->password = password_hash($anPassword, PASSWORD_DEFAULT);
    }
    
    /**
     * 
     * @param type string $firstName 
     * @param type string $lastName 
     */
    public function setName($firstName, $lastName){
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }
    
    /**
     * 
     * @return type string
     */
    public function getFirstName(){
        return $this->firstName;
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

