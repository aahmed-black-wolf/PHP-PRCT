<?php
     
     const heading = "Note";
         
    
     $errors = new Response();

     $config = base_bath("./core/config.php");

     $db = new Database($config["database"]);
      
     $user = $db->query("select * from users where id = :id",["id" => $_GET['id']])->findOrFail();
        
     if(!$user){abort();}


     



     view("notes/show.view.php",["user"=> $user]);