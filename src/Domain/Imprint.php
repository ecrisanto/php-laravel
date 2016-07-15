<?php
namespace PlatziPHP\Domain;
use PlatziPHP\Infrastructure\FakeDatabase;

class Imprint{
    /**
     *
     * @var type FakeDatabase
     */
    
    private $db;
    
    public function __construct(FakeDatabase $db) {
        $this->db = $db;
    }

    /**
     * 
     * @return type Collection
     */
    public function listPublishPosts(){
        return $this->db->posts();
    }
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
