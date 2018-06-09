<?php

namespace app\controllers;
use app\providers\Auth;

abstract class MainController {
    protected $urlParams;
    protected $action;
    protected $post;    


    public function __construct($action, $urlParams) {
        $this->action = $action;
        $this->urlParams = $urlParams;

        $this->makePost();
    }

    public function makePost()
    {
        $this->post = $_POST;
    }
    public function ExecuteAction() {

        return $this->{$this->action}();
    }

    public function View($viewModel,$data = NULL) {
        $classData = explode("\\", get_class($this));
        $className = end($classData);

        $includingThePage = __DIR__ .
               "/../../views/" .
               $className . "/" .
               $this->action . ".php";
        $includingThePage = __DIR__ .
               "/../../views/" .               
               $viewModel. ".php";   
        //extract data, from array to variabel
         //extract data, from array to variabel
        if($data !== NULL)
        extract($data);        

        
        require $includingThePage;
        // if ($fullView) {
        //     require __DIR__ . "/../../views/template.php";
        // } else {
        //     require $content;
        // }
    }

    public function TemplateView($template,$viewModel,$data = NULL) {          
        $classData = explode("\\", get_class($this));
        $className = end($classData);

        $includingThePage = __DIR__ .
               "/../../views/" .
               $className . "/" .
               $this->action . ".php";
        $includingThePage = __DIR__ .
               "/../../views/" .               
               $template. ".php";   
        //extract data, from array to variabel
        if($data !== NULL)
        extract($data);        

        $include = $viewModel.".php";
        require $includingThePage;        
    }
    //For Getting Base Url , Alias Mendapattkan Lokasi Project Sekarang
    public function base_url($link = "")
    {

    $currentPath = $_SERVER['PHP_SELF']; 

    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 

    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

    // return: http://localhost/myproject/
    return $protocol.'://'.$hostName.$pathInfo['dirname']."/".$link;
    }
   
}