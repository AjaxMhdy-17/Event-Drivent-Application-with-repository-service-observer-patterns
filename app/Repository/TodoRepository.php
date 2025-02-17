<?php

namespace App\Repository;

use App\Interfaces\TodoInterfaces;
use App\Models\TodoList;

class TodoRepository implements TodoInterfaces
{

    public function __construct() {}

    public function getTodos()
    {
        return TodoList::latest()->get();
    }
    public function createTodo($data)
    {
        return TodoList::create($data);
    }
    public function editTodo($id)
    {
        $data['todos'] = TodoList::latest()->get();
        $data['todo'] = TodoList::FindOrFail($id);
        return $data;
    }
    public function updateTodo($id, $data)
    {
        return TodoList::FindOrFail($id)->update($data);
    }
    public function deleteTodo($id)
    {
        return TodoList::FindOrFail($id)->delete();
    }
}
