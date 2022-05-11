<?php

class App{

    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
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