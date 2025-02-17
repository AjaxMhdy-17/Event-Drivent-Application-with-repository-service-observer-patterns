@extends('layouts.layout')

@section('content')
<div>
    <h2>Create</h2>
    <div class="row col-md-6">
        <form action="{{route('todo.store')}}" method="post">
            @csrf
            <div class="my-2">
                <input type="text" name='title' class="form-control" placeholder="title">

                @error('name')
                <div>
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="my-2">
                <textarea name="" id="" class="form-control" placeholder="description"></textarea>
            </div>
            <div class="my-2">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection