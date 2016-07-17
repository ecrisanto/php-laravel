<?php
class PostRepositoryTest extends PHPUnit_Framework_TestCase{
    //use \PlatziPHP\Infrastructure\PostRepository;
    
    
    /**
     * Si empieza con la palabras "test" no hace dalta poner como comentario "test"
     */
    function test_all_posts(){
        $posts = new \PlatziPHP\Infrastructure\PostRepository();
        $result = $posts->all(); 
        
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
            
    function test_find_a_post_by_id(){
        
        $posts = new \PlatziPHP\Infrastructure\PostRepository();
        
        $post= $posts->find(1);
        $this->assertInstanceOf(
                PlatziPHP\Domain\Post::class, 
                $post
        );
        
    }
    
    function test_fail_to_find_a_post_by_id(){
        
        $posts = new \PlatziPHP\Infrastructure\PostRepository();
        
        $this->setExpectedException(OutOfBoundsException::class);
        $post= $posts->find(234);              
    }
    
    function test_searching_post(){
        $posts = new \PlatziPHP\Infrastructure\PostRepository();
        $posts->search('#4');
    }
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
