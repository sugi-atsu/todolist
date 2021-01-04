<?php
require_once(dirname(__FILE__, 2).'/config/database.php');
class TodoController{
    public $user;
    public $todos;
    public function index($dbh){
        $sql_user = 'select * from user';
        $prepare_user = $dbh->prepare($sql_user);
        $prepare_user->execute();
        $this->user = $prepare_user->fetchAll(pdo::FETCH_ASSOC);

        $sql_todos = 'select * from todos';
        $prepare_todos = $dbh->prepare($sql_todos);
        $prepare_todos->execute();
        $this->todos = $prepare_todos->fetchAll(pdo::FETCH_ASSOC);
    }
}

?>