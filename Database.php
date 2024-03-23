<?php 

class Database {

    public $connections;

 

    public function __construct($config,$username="root",$password ="Abdo123456zxc@") {
        
        $dsn= "mysql:" . http_build_query($config,"",";");

        $this->connections =  new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        
    }

    public function query($query) {
        $statement = $this->connections->prepare($query);

        $statement->execute();

        return  $statement;
    }


}