<?php
     
     $heading = "Note";
         
    
     $errors = new Response();

     $config = require("./config.php");

     $db = new Database($config["database"]);
      
     $user = $db->query("select * from users where id = :id",["id" => $_GET['id']])->findOrFail();
        
     if(!$user){abort();}


     



 require ("./views/note.view.php");