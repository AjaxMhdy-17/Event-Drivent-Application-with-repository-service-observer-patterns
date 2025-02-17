@extends('todo.page')

@section('form')
<div class="card text-start">
    <form action="{{route('todo.update',['todo' => $todo->id])}}" method="post">
        @csrf
        @method('put')
        @include('todo.form')
        <div class="my-2 text-start">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection