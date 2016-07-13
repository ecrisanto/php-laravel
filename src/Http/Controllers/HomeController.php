<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
Use \PlatziPHP\FakeDatabase;
use PlatziPHP\Http\Views\View;

class HomeController extends \Illuminate\Routing\Controller{
        
    /**
     *
     * @var type @fakeDatabase
     */
    private $db;
    
    public function __construct(FakeDatabase $db){
        $this->db = $db;
    }      
    
    public function index(Request $request){

        $posts = $this->db->posts();
        
        $first = $posts->first();
                
        $view = new View('home',['posts'=>$posts, 'firstPost' =>$first]);
        
        return $view->render();

    }
    
    public function show($id){
        $posts = $this->db->posts();
        $view = new View('post_details',[
            'post'=>$posts->get($id)
            ]);
        
        return $view->render();
    }
}