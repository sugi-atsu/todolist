<?php
require_once(dirname(__FILE__, 2).'/config/database.php');
class Todo{
    public static function findAll(){
        $dbh = new PDO(DSN, USER, PASS);
        $sql = 'select * from todos where id = 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(pdo::FETCH_ASSOC);
    }
    public static function isExistById($id){
        $dbh = new PDO(DSN, USER, PASS);
        $sql = "select * from todos where id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $row = $stmt->fetchAll(pdo::FETCH_ASSOC);
        if(count($row) !== 0){
            return true;
        }
        return false;
    }
    public static function findById($id){
        $dbh = new PDO(DSN, USER, PASS);
        $sql = "select * from todos where id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(pdo::FETCH_ASSOC);
    }
}
?>