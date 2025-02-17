<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidation;
use App\Http\Requests\FormValidationRequest;
use App\Service\TodoService;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public $todoService;
    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = $this->todoService->getTodos();
        return view('todo.index', [
            'todos' => $todos
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(FormValidationRequest $request)
    {
        try {
            $data = $request->validated();
            $done = $this->todoService->createTodo($data);
            throw_if(!$done, "Post Cannot be created");
            return back()->with('success', 'Post Created Successfully');
        } catch (\Exception $exp) {
            return back()->with('danger', $exp->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data = $this->todoService->editTodo($id);
        return view('todo.edit', [
            'todos' => $data['todos'],
            'todo' => $data['todo']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormValidationRequest $request, string $id)
    {

        try {
            $data = $request->validated();
            $done = $this->todoService->updateTodo($id, $data);
            throw_if(!$done, "Post Cannot be Updated");
            return back()->with('success', 'Post Updated Successfully');
        } catch (\Exception $exp) {
            return back()->with('danger', $exp->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $done = $this->todoService->deleteTodo($id);
            throw_if(!$done, "Post Cannot be Deleted");
            return back()->with('success', 'Post Deleted Successfully');
        } catch (\Exception $exp) {
            return back()->with('danger', $exp->getMessage());
        }
    }
}
