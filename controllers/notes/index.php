<?php
     
     const heading = "Notes";
        
     
     $config = base_bath("./core/config.php");

     $db = new Database($config["database"]);
      
       
     $notes = $db->query("select * from notes where user_id = 1")->get();
    

 view("notes/index.view.php",["notes" => $notes]);