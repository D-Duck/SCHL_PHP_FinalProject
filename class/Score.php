<?php
class Score extends Database {
    
    private $db;

    public function __construct() {
        $this->db = $this->connect();
    }
    public function add($name, $score){
        try{
            $data = array('name' => $name, 'score' => $score);
            $sql = "INSERT INTO score (name, score, msg) VALUES (:name, :score, \"\")";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);
        } catch(PDOException $e) {
            return "Registration Error: " . $e->getMessage();
        }
    }
    public function remove($id){
        try{
            $data = array('id' => $id);
            $sql = "DELETE FROM score WHERE id = :id";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);
        } catch(PDOException $e) {
            return "Registration Error: " . $e->getMessage();
        }
    }
    public function update($id, $msg) {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM score WHERE id = :id");
            $stmt->execute(['id' => $id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($row) {
                $data = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'score' => $row['score'], 
                    'msg' => $msg
                ];
    
                print(implode(',', $data));
                $query = "UPDATE score SET name = :name, score = :score, msg = :msg WHERE id = :id";
                $stmt = $this->connection->prepare($query);
                $stmt->execute($data);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
?>
