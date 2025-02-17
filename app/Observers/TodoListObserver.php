<?php

namespace App\Observers;

use App\Models\TodoList;
use App\Models\User;
use App\Notifications\TodoListCreatedNotification;
use App\Notifications\TodoListDeletedNotification;
use App\Notifications\TodoListUpdatedNotification;

class TodoListObserver
{
    /**
     * Handle the TodoList "created" event.
     */
    public function created(TodoList $todoList): void
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new TodoListCreatedNotification($todoList));
        }
    }

    /**
     * Handle the TodoList "updated" event.
     */
    public function updated(TodoList $todoList): void
    {

        $users = User::all() ; 
        foreach($users as $user){
            $user->notify(new TodoListUpdatedNotification($todoList));
        }
    }

    /**
     * Handle the TodoList "deleted" event.
     */
    public function deleted(TodoList $todoList): void
    {
        $users = User::all() ; 
        foreach($users as $user){
            $user->notify(new TodoListDeletedNotification($todoList));
        }
    }

    /**
     * Handle the TodoList "restored" event.
     */
    public function restored(TodoList $todoList): void
    {
        //
    }

    /**
     * Handle the TodoList "force deleted" event.
     */
    public function forceDeleted(TodoList $todoList): void
    {
        //
    }
}
