<?php

namespace App\Models;

use App\Observers\TodoListObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([TodoListObserver::class])]
class TodoList extends Model
{
    protected $fillable = ['title' , 'description']; 
}
