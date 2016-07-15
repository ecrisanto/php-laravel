<?php
namespace PlatziPHP\Infrastructure;
use \Illuminate\Support\Collection;
use PlatziPHP\Domain\Post;

class PostRepository{
    
    public function all(){
        $pdo = $this->getPDO();
        
        $statement = $pdo->prepare(
                'SELECT * FROM posts'
                );
        
        $statement->execute();
        
        return $this->mapToPosts( 
            $statement->fetchAll()
        );        
    }
    
    
    public function find($id){
       $pdo = $this->getPDO(); 
       
       $statement = $pdo->prepare(
               'SELECT * FROM posts where id = :id'
               );
       //echo 'SELECT * FROM posts where id = :id';
       $statement->bindParam(':id',$id,\PDO::PARAM_INT);    
       
       $statement->execute();
       
       return $this->mapPost(
               $statement->fetch()
               );
    }
    
    /**
     * 
     * @return \PDO
     */    
    private function getPDO(){
        return new \PDO(
            'mysql:host=127.0.0.1;dbname=platziphp',
            'root', 
            ''
            );        
    }

    private function mapToPosts(array $results){

        $posts = new Collection();

        foreach ($results as $result){      
            $post = $this->mapPost($result);            
            $posts-> push($post);
        }
        
        return $posts;  
    }
    
    private function mapPost(array $result){
        return new Post(
                    $result['author_id'],
                    $result['title'],
                    $result['body'],
                    $result['id']
                    );        
    }
}

/*
*PHP with Laravel project
*
*Emmanuel Crisanto @e_Crisanto
*
*
*/
