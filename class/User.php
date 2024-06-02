<?php
class User extends Database {
    private $db;

    public function __construct() {
        $this->db = $this->connect();}

    public function getUserNameByMail($mail) {
        try {
            $dbs = $this->connection->prepare("SELECT name FROM user WHERE mail = :mail");
            $dbs->execute([':mail' => $mail]);
            $result = $dbs->fetch(PDO::FETCH_ASSOC);
            return $result['name'] ?? 'ERR';
        } catch(PDOException $e) {die($e->getMessage());}}

    public function login($mail, $password) {
        try {
            $dbs = $this->db->prepare("SELECT * FROM user WHERE mail = :mail AND pass = :pass");
            $dbs->execute(array('mail' => $mail, 'pass' => $password));

            if ($dbs->rowCount() == 1) {
                $_SESSION['logedin'] = true;
                $_SESSION['name'] = $this->getUserNameByMail($mail);
                return true;
            }else{return false;}
        } catch(PDOException $e) {echo $e->getMessage();}}

    public function register($name, $mail, $password){
        try{
            // check if mail already exists
            $dbs = $this->db->prepare("SELECT * FROM user WHERE mail = :mail");
            $dbs->execute(['mail' => $mail]);

            if($dbs->rowCount() > 0){
                return false;}
            
            // creating new user
            $dbs = $this->db->prepare("INSERT INTO user (name, pass, mail) VALUES (:name, :pass, :mail)");
            $dbs->execute(array('name' => $name, 'pass' => $password, 'mail' => $mail));

            if($dbs->rowCount() == 1) {
                return true;
            }else{
                return false;}
        } catch(PDOException $e) {echo $e->getMessage();}}
}