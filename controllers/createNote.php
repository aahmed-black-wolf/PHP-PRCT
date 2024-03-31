<?php
     
     $heading = "Create Note";
              
     $config = require("./config.php");

     $db = new Database($config["database"]);
       


     if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $errors = [];
   
      if(strlen($_POST["title"]) === 0){
         $errors['error'] = "Please enter title";
       }
  
       if(strlen($_POST["body"]) === 0){
        $errors['error'] = "Please enter body";
      }

      if(strlen($_POST["title"]) > 10 || strlen($_POST["body"]) > 1000 ){
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


      


 require ("./views/createNote.view.php");