<?php

namespace App\Service;

use App\Interfaces\TodoInterfaces;

class TodoService
{
    public $todoInterface;
    public function __construct(TodoInterfaces $todoInterface)
    {
        $this->todoInterface = $todoInterface ; 
    }

    public function getTodos(){
        return $this->todoInterface->getTodos() ; 
    }

    public function createTodo($data){
        return $this->todoInterface->createTodo($data) ; 
    }

    public function editTodo($id){
        return $this->todoInterface->editTodo($id); ; 
    }

    public function updateTodo($id, $data){
        return $this->todoInterface->updateTodo($id, $data) ; 
    }

    public function deleteTodo($id){
        return $this->todoInterface->deleteTodo($id) ; 
    }

}
