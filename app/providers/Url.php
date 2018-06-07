<?php

namespace app\providers;


abstract class Url {
    public function redirectTo($urlInject)
    {
    	$uri = Url::base_url()."/".$urlInject;
        header("location:".$uri);
    }
    public function to($urlInject)
    {
    	$uri = Url::base_url().$urlInject;
        return $uri;
    }
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