<?php
    class Request{

        public function getPath(){
            $path = $_SERVER["REQUEST_URI"] ?? '/';
            $position = strpos($path, "?");

            if ($position === false){
                #no ?id=1 in url

                return $path;
                
            }
            $path = substr($path, 0, $position);
           
           

        }
        public function getMethod(){
            return strtolower($_SERVER["REQUEST_METHOD"]);
        }
    }


?>