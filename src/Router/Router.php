<?php
    namespace App\Router;

    Class Router{
        private $url;
        
        private $routes=[];
        private $namedRoutes=[];
    	
    	public function __construct($url){
    		$this->url=$url;
    	}
    	
    	public function get($path,$callable,$name=null){
           return $this->add($path,$callable,$name,'GET');
    	}
    	public function post($path,$callable,$name=null){
          return $this->add($path,$callable,$name,'POST');
    	}
    	private function add($path,$callable,$name,$method){
    		 $route=new Route($path,$callable);
             $this->routes[$method][]= $route;
             if($name){
             	$this->namedRoutes[$name]=$route;
             }
             return $route;
    	}
    	public function url($name,$param=[]){
    		if(!isset($this->namedRoute)){
    			throw new RouterException('No matching route');
    		}
            return $this->namedRoute->getUrl($param);
    	}
    	public function run(){
    		if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
    			throw new \Exception('REQUEST_METHOD does not exits');
    		}
    		foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){ 
    			if($route->match($this->url)){
    				return $route->call();
    			}
    		}
    		throw new \Exception('No matching route'); 
    	}
        public function getRoutes(){
          echo '<pre>';
            var_dump($this->routes);
          echo '</pre>';
        }
    }