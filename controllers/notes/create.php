<?php
     
     require "./Validator.php";


     $heading = "Create Note";
              
     $config = require("./config.php");

     $db = new Database($config["database"]);
       


     if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $errors = [];
   
      if( !Validator::string( $_POST["title"], 1,10) || !Validator::string( $_POST["body"], 1,1000) ) {
         $errors['error'] = "Please enter title from 0  to 10 and body from 0 to 1000";
       }
      
      
      if(empty($errors)){
           $db->query('INSERT INTO notes (body,title,user_id) VALUES (:body,:title,:user_id)',[
              'body'=> $_POST['body'],
              'title'=> $_POST['title'],
              'user_id'=> 1,
           ]);
      }
     }


      


 require ("./views/notes/create.view.php");