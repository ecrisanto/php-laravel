<?php
class Databasetext extends PHPUnit_Framework_TestCase{
    
    /**
     * Si empieza con la palabras "test" no hace dalta poner como comentario "test"
     */
    function test_connection_doesnt_explode(){
        $db = new PlatziPHP\Infrastructure\Database();
        $result = $db->posts(); 
        
        $this->assertInstanceOf(
                \Illuminate\Support\Collection::class, 
                $result
        );
        
        foreach ($result as $post){
            $this->assertInstanceOf(
            PlatziPHP\Domain\Post::class, 
            $post);            
        }                                        
    }
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
