<?php
require_once(dirname(__FILE__, 2).'/models/TodoModel.php');
class TodoController{
    public function index(){
        $todos = Todo::findAll();
        $data = array(
            'todos' => $todos
        );
        return $data;
    }
    public function detail(){
        $id = $_GET['id'];
        if(Todo::isExistById($id)){
            $todo_list = Todo::findById($id);
            return $todo_list;
        }else{
            header('HTTP/1.0 404 Not Found');
            include_once(dirname(__FILE__,2).'/views/errors/404.php');
            exit;
        }
    }
}
?>