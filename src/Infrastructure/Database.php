<?php
namespace PlatziPHP\Infrastructure;
use \Illuminate\Support\Collection;
use PlatziPHP\Domain\Post;

class Database{
    
    public function posts(){
        $pdo = new \PDO(
                'mysql:host=127.0.0.1;dbname=platziphp',
                'root', 
                ''
                ); 
        
        $statement = $pdo->prepare(
                'SELECT * FROM posts'
                );
        
        $statement->execute();
        
        return $this->mapToPosts( 
            $statement->fetchAll()
        );        
    }
    
    private function mapToPosts(array $results){
        
        $posts = new Collection();
        
        foreach ($results as $result){            
            $post = new Post(
                    $result['author_id'],
                    $result['title'],
                    $result['body'],
                    $result['id']
                    );
            $posts-> push($post);
        }
        
        return $posts;  
    }
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
