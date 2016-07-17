<?php
class ApplicationTest extends PHPUnit_Framework_TestCase{
    use \PlatziPHP\Application;
    
    
    function test_run(){
        $app = new Application();
        
    }
    
//    function test_all_posts(){
//        $posts = new \PlatziPHP\Infrastructure\PostRepository();
//        $result = $posts->all(); 
//        
//        $this->assertInstanceOf(
//                \Illuminate\Support\Collection::class, 
//                $result
//        );
//        
//        foreach ($result as $post){
//            $this->assertInstanceOf(
//            PlatziPHP\Domain\Post::class, 
//            $post);            
//        }                                        
//    }
    
    
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
