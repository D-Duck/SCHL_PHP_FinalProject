<?php
class Score extends Database {
    private $db;
    
    public function __construct() {
        $this->db = $this->connect();}
    
    public function add($name, $score){
        try{
            $dbs = $this->db->prepare("INSERT INTO score (name, score, msg) VALUES (:name, :score, \"\")");
            $dbs->execute(array('name' => $name, 'score' => $score));
        } catch(PDOException $e) {echo $e->getMessage();}}
    
    public function remove($id){
        try{
            $dbs = $this->db->prepare("DELETE FROM score WHERE id = :id");
            $dbs->execute(array('id' => $id)); 
        } catch(PDOException $e) {echo $e->getMessage();}}
    
    public function update($id, $msg) {
        try {
            $dbs = $this->connection->prepare("UPDATE score SET msg = :msg WHERE id = :id");
            $dbs->execute(array('id' => $id, 'msg' => $msg));
        } catch (PDOException $e) {echo $e->getMessage();}}
}