@extends('todo.page')

@section('form')
<div class="card text-start">
    <form action="{{route('todo.store')}}" method="post">
        @csrf
        @include('todo.form')
        <div class="my-2 text-start">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
</div>
@endsection