<?php
class Todo{
    public static $dbh;
    public static $todos;
    public static $todo;
    public function __construct(){
        require_once(dirname(__FILE__, 2).'/config/database.php');
        self::$dbh = $dbh;
    }
    public static function findAll(){
        $sql = 'select * from todos';
        $prepare = self::$dbh->prepare($sql);
        $prepare->execute();
        return $prepare->fetchAll(pdo::FETCH_ASSOC);
    }
    public static function findDetail($id){
        $sql = 'select * from todos where id = :id';
        $prepare = self::$dbh->prepare($sql);
        $prepare->bindValue(':id',$id);
        $prepare->execute();
        return $prepare->fetchAll(pdo::FETCH_ASSOC);
    }
}

?>