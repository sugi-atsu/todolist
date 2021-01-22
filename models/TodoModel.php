<?php
require_once(dirname(__FILE__, 2).'/config/database.php');
class Todo{
    public static function findAll(){
        $dbh = new PDO(DSN, USER, PASS);
        $sql = 'select * from todos';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(pdo::FETCH_ASSOC);
    }
    public static function findAllid(){
        $dbh = new PDO(DSN, USER, PASS);
        $sql = 'select id from todos';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(pdo::FETCH_ASSOC);
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
// var_dump(Todo::findById(1));
// new Todo;

?>