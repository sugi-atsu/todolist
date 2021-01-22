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
        $column = Todo::findAllid();
        foreach($column as $row){
            $idNums[] = $row['id'];
        }
        $id = $_GET['id'];
        if(in_array($id,$idNums)){
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