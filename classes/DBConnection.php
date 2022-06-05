<?php
class DBConnection{
    public $user;
    public $pass;
    public $db;
    public $host;


    public function __construct($user,$pass,$db,$host)
    {
        $this->user=$user;
        $this->pass=$pass;
        $this->db=$db;
        $this->host=$host;

    }

    public function connect()
    {
        $dsn='mysql:host='.$this->host.';dbname='.$this->db;
        $pdo= new PDO($dsn, $this->user, $this->pass);
        return $pdo;
    }


    public function insert_data($name,$email,$password){
        $pdo=$this->connect();
        $sql='INSERT INTO users(name, email,password) VALUES (?,?,?)';
        $query=$pdo->prepare($sql);
        $query->execute([$name, $email, $password]);
//    echo ('good');
    }

    public function insert_data_article($title,$intro,$text,$date){
        $pdo=$this->connect();
        $sql='INSERT INTO articles (title,intro,text,date) VALUES (?,?,?,?)';
        $query=$pdo->prepare($sql);
        $query->execute([$title,$intro,$text,$date]);
    }


}