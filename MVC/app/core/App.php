<?php

class App{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

                    public function __construct(){
                    $url = $this->parseUrl();   // !to parse the current url into an array
                    if(file_exists('../app/controllers/' . $url[0] . '.php')){  // !checks if the controller file exist
                            $this->controller = $url[0];                       // !assign the controller found in url to variable
                            unset($url[0]);
                            
                        }
                            require_once '../app/controllers/' .$this->controller. '.php';  // !import the controller file

                    $this->controller = new $this->controller; // ! ??

                    if(isset($url[1])){  // !checks if there is a method in the url
                        if(method_exists($this->controller,$url[1])){ // !checks if the method existes inside the controller file 
                            $this->method = $url[1];    // !assign the method found in url to variable
                            unset($url[1]);
                        }
                    }

                    $this->params = $url ? array_values($url) : [];   //*reset the indexes of array
                    call_user_func_array([$this->controller,$this->method],$this->params); // ! ??
                    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));       // !parse url into array
        }
    }
}

?>