<?php
class Todo{
    public $todos;
    public $dbh;
    public function __construct(){
        require_once(dirname(__FILE__, 2).'/config/database.php');
        $this->dbh = $dbh;
    }
    public function findAll(){
        $sql_todos = 'select * from todos where user_id = 1';
        $prepare_todos = $this->dbh->prepare($sql_todos);
        $prepare_todos->execute();
        $this->todos = $prepare_todos->fetchAll(pdo::FETCH_ASSOC);

    }
}

?>