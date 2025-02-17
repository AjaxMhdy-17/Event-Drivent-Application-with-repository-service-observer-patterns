<?php

namespace App\Interfaces;

interface TodoInterfaces
{
    public function getTodos();
    public function createTodo($data);
    public function editTodo($id);
    public function updateTodo($id , $data);
    public function deleteTodo($id);
}
