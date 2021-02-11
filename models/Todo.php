<?php
require_once(dirname(__FILE__, 2).'/config/database.php');
class Todo{
    public static function findAll(){
        $dbh = new PDO(DSN, USER, PASS);
        $sql = 'select * from todos where user_id = 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(pdo::FETCH_ASSOC);
    }
    public static function isExistById($id){
        $dbh = new PDO(DSN, USER, PASS);
        $sql = "select * from todos where user_id = 1 and id = :id";
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
    public static function save($data){
        try{
            $dbh = new PDO(DSN, USER, PASS);
            $sql = "insert into todos (user_id, title, text) values (1, :title, :text)";
            $stmt = $dbh->prepare($sql);
            $dbh->beginTransaction();
            // throw new Exception('新規作成できませんでした');
            $stmt->bindValue(':title', $data['title']);
            $stmt->bindValue(':text', $data['text']);
            $stmt->execute();
            $dbh->commit();
        }catch(Exception $e){
            $dbh->rollBack();
            return false;
        }
    }
    public static function update($data){
        try{
            $dbh = new PDO(DSN, USER, PASS);
            $sql = "update todos set title=:title, text=:text where id = :todo_id";
            $stmt = $dbh->prepare($sql);
            $dbh->beginTransaction();
            // throw new Exception('更新できませんでした');
            $stmt->bindValue(':title', $data['title']);
            $stmt->bindValue(':text', $data['text']);
            $stmt->bindValue(':todo_id', $data['todo_id']);
            $stmt->execute();
            $dbh->commit();
        }catch(Exception $e){
            $dbh->rollBack();
            return false;
        }
    }
}

?>