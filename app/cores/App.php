<?php

class App{

    // Default Parameter

    protected $controller = 'Home';
    protected $method = 'index';
    protected $parameter = [];


    public function __construct()
    {
        $url = $this->parseURL();
        
        // Trivia
        // $url[0] -> must be Controller Name
        // $url[1] -> must be Method in Controller
        // $url[2, 3, 4, etc] -> optional , if exist , must be parameter

        //CONTROLLER
        //Make sure the controller file is exist on controller folder
        //Check if any controller in URL , if not use default controller home
        if($url == NULL)
               {
			$url = [$this->controller];
		}

        if(file_exists('../app/controllers/'.$url[0].'_controller.php')){
            $this->controller = $url[0];
            unset($url[0]);
            // var_dump($url);
        }

        require_once '../app/controllers/'.$this->controller.'_controller.php';
        $this->controller = new $this->controller;

        //METHOD
        //Make sure the method is exist on following controller
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Parameters
        if(!empty($url)){
            // var_dump($url);
            $this->parameter = array_values($url);
        }

        // Run Controller , Method, and include parameter
        call_user_func_array([$this->controller,$this->method],$this->parameter);
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            // Remove Latest Slash in URL
            $url = rtrim($_GET['url'],'/');

            // Clean Up URL from SpecialChars
            $url = filter_var($url,FILTER_SANITIZE_URL);

            // Explode URL based on slash delimiter , String to Array
            $url = explode('/',$url);

            return $url;
        }
    }
}