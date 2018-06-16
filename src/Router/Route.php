<?php
    namespace App\Router;

    Class Route{
    	private $path;
    	private $callable;
    	private $matches=array();
    	private $param=[];
    	public function  __construct($path,$callable){
           $this->path=trim($path,'/');
           $this->callable=$callable;
    	}
    	public function match($url){
    		$url=trim($url,'/');
            $path=preg_replace_callback('#:([\w]+)#', [$this,'paramMatch'], $this->path);
            $regex="#^$path$#i";
            if(!preg_match($regex,$url,$matches)){
                 return false;
            }
            array_shift($matches);
            $this->matches=$matches;
            return true;
    	}
    	private function paramMatch($match){
    		if(isset($this->param[$match[1]])){
    			return '('.$this->param[$match[1]].')';
    		}
    		return '([^/]+)';
    	}
    	public function with($param,$regex){
           $this->param[$param]=str_replace('(','(?:',$regex);
           return $this;
    	}
    	public function call(){
    		return call_user_func_array($this->callable, $this->matches);
    	}
    	public function getUrl($params){
    		$path=$this->path;
    		foreach($path as $k=>$v){
    			$path=str_replace("$k","$v",$path);
    		}
    		return $path;
    	}

    	
    }