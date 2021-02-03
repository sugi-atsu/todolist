<?php
class TodoValidation{
    public $data = [];
    public $errorMsgs = [];
    public function setData($data){
        $this->data = $data;
    }
    public function getErrorMsgs(){
        return $this->errorMsgs;
    }
    public function check(){
        if(empty($this->data['title'])){
            $this->errorMsgs[] = 'タイトルが空です';
        }
        if(empty($this->data['text'])){
            $this->errorMsgs[] = 'テキストが空です';
        }
        if(count($this->errorMsgs) > 0){
            return false;
        }
    }
}


?>