<?php
class User extends Database {
    
    private $db;

    public function __construct() {
        $this->db = $this->connect();
    }
    public function getUserNameByMail($mail) {
        try {
            $stmt = $this->connection->prepare("SELECT name FROM user WHERE mail = :mail");
            $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result ? $result->name : "ERR"; // Return the name or null if not found
        } catch(PDOException $e) {
            die("Query error: " . $e->getMessage());
        }
      }
    public function login($mail, $password) {
        try {
            $data = array('mail' => $mail, 'pass' => $password);
            $sql = "SELECT * FROM user WHERE mail = :mail AND pass = :pass";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);

            if ($query_run->rowCount() == 1) {
                $_SESSION['logedin'] = true;
                $_SESSION['name'] = $this->getUserNameByMail($mail);
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Login Error: " . $e->getMessage();
        }
    }
    public function register($name, $email, $password){
        try{
            $check_sql = "SELECT * FROM user WHERE mail = :mail";
            $check_query = $this->db->prepare($check_sql);
            $check_query->execute(['mail' => $email]);

            if($check_query->rowCount() > 0){
                return false;
            }

            $data = array('name' => $name, 'pass' => $password, 'mail' => $email);
            $sql = "INSERT INTO user (name, pass, mail) VALUES (:name, :pass, :mail)";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);

            if($query_run->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            return "Registration Error: " . $e->getMessage();
        }
    }
}
?>
