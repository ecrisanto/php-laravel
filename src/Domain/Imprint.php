<?php
namespace PlatziPHP\Domain;
//use PlatziPHP\Infrastructure\FakeDatabase;
use PlatziPHP\Infrastructure\PostRepository;

class Imprint{
    /**
     *
     * @var type FakeDatabase
     */
    
    private $posts;
    
    public function __construct(PostRepository $posts) {
        $this->posts = $posts;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function listPublishedPosts()
    {
        return $this->posts->all();
    }

    public function findById($id)
    {
        return $this->posts->find($id);
    }
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
