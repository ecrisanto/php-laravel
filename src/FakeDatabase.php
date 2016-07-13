<?php
namespace PlatziPHP;
use PlatziPHP\Author;
use \Illuminate\Support\Collection;

class FakeDatabase{
    
    public function posts(){
        $author = new \PlatziPHP\Author('ecrisanto@gmail.com','123456','AUTOR_DE_PLATZI');                                

        return new Collection([
            1 => new Post($author, 'Post # 1', 'This is the first post'),
            2 => new Post($author, 'Post # 2', 'This is the second post'),
            3 => new Post($author, 'Post # 3', 'This is the third post'),
            4 => new Post($author, 'Post # 4', 'This is the fourth post'),
        ]);

    }
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
