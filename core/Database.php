<?php 

class Database {

    public $connections;
    public $statement;
 

    public function __construct($config,$username="root",$password ="Abdo123456zxc@") {
        
        $dsn= "mysql:" . http_build_query($config,"",";");

        $this->connections =  new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query,$params=[]) {
        $this -> statement = $this->connections->prepare($query);

        $this -> statement->execute($params);

        return  $this;
    }

  

    public function find() {
        return $this -> statement->fetch(PDO::FETCH_ASSOC);
    }


    public function get() {
      return  $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOrFail() {
      $user=  $this -> statement->fetch(PDO::FETCH_ASSOC);
      if(!$user){return abort(); }
      return $user;
    }

}