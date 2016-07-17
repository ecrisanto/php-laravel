<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
Use PlatziPHP\Infrastructure\FakeDatabase;
use PlatziPHP\Http\Views\View;
use PlatziPHP\Domain\Imprint;

class HomeController extends \Illuminate\Routing\Controller{
        
    private $imprint;    
    
    public function __construct(Imprint $imprint){
        $this->imprint = $imprint;
    }      
    
    public function index(Request $request){

        $posts = $this->imprint->listPublishedPosts();
        
        $first = $posts->first();
                
        $view = new View('home',['posts'=>$posts, 'firstPost' =>$first]);
        
        return $view->render();

    }
    
//    public function show($id){
//        $posts = $this->imprint->listPublishPosts();
//        $view = new View('post_details',['post'=>$posts->get($id)]);
//        //$view = new View('home',        ['posts'=>$posts, 'firstPost' =>$first]);        
//        
//        return $view->render();
//    }
    
    public function show($id)
    {
        $post = $this->imprint->findById($id);

        $view = new View('post_details', [
            'post' => $post
        ]);

        return $view->render();
    }
}