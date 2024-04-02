<?php 
   function dd($data ) {
    echo "<pre>";
       var_dump($data);
     echo "</pre>";
    die();
   }
   


function isActiveUrl($url){
    return $_SERVER['REQUEST_URI'] === $url;
};



function base_bath($bath,$attributes=[]){
   extract($attributes);
   return require( BATH_BATH. $bath);
} 


function view($bath,$attributes=[]){
   extract($attributes);
   return base_bath("views/".$bath,$attributes);
}