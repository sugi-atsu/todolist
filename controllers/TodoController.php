<?php
require_once(dirname(__FILE__, 2).'/models/Todo.php');
require_once(dirname(__FILE__, 2).'/validatons/TodoValidation.php');
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
        if(!Todo::isExistById($id)){
            header('HTTP/1.0 404 Not Found');
            include_once(dirname(__FILE__,2).'/views/errors/404.php');
            exit;
        }
        $todo_list = Todo::findById($id);
        return $todo_list;
    }
    public function new(){
        $data = [
            'title'=>$_POST['title'],
            'text'=>$_POST['text']
        ];
        $validation = new TodoValidation;
        $validation->setData($data);
        if($validation->check() === false){
            $errorMsgs = $validation->getErrorMsgs();
            session_start();
            $_SESSION['errorMsgs'] = $errorMsgs;
            header('Location: ../../views/todo/new.php');
            exit;
        }
        if(Todo::save($data) === false){
            header('Location: ../../views/todo/new.php');
            exit;
        }
    }
    public function edit(){
        $data = [
            'title'=>$_POST['title'],
            'text'=>$_POST['text'],
            'todo_id'=>$_POST['todo_id']
        ];
        $validation = new TodoValidation;
        $validation->setData($data);
        if($validation->check() === false){
            $errorMsgs = $validation->getErrorMsgs();
            session_start();
            $_SESSION['errorMsgs'] = $errorMsgs;
            header("Location: ../../views/todo/edit.php?todo_id=".$data['todo_id']);
            exit;
        }
        if(Todo::update($data) === false){
            header("Location: ../../views/todo/edit.php?todo_id=".$data['todo_id']);
            exit;
        }

    }
}

?>
