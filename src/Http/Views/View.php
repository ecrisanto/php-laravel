<?php
namespace PlatziPHP\Http\Views;

use Illuminate\Http\Response;

class View{
     
    private $template;
    
    private $params;
    
    public function __construct($template, array $params=[]) {
                
        $this->template = $template;
        $this->params = $params;                
    }
    
    /**
     * 
     * @return \PlatziPHP\Http\Views\Response
     */
    public function render(){
        //loadtemplate: contenido de un template        
        $content = $this->loadTemplate();
        $response = new Response($content);
        //var_dump($response);
        return $response;                        
    }
    
    private function loadTemplate(){
                
        $path = dirname(dirname(dirname(__DIR__))).'/resources/views';
        
        $templatePath = "$path/{$this->template}.php";
        
        return $this->includeTemplateFromFile($templatePath, $this->params);        
        
    }
    
    private function includeTemplateFromFile($path, $params){
        if(file_exists($path)){
            extract($params);
            ob_start();
            require $path;           

            return ob_get_clean();
        }
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

