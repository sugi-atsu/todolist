<?php
class TodoController{
    public function __construct(){
        require_once(dirname(__FILE__, 2).'/models/TodoModel.php');
    }
    public function index(){
        new Todo;
        return Todo::findAll();
    }
    public function getDetail($id){
        new Todo;
        return Todo::findDetail($id);
    }
}
?>