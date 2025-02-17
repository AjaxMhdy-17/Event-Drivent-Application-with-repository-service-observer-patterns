@extends('layouts.layout')

@section('content')
<div class="text-center my-3">
    <h2>Repository Design Pattern</h2>
    <div class="row col-md-8 col-lg-6 mx-auto">
        @yield('form')
        <div class="card my-2">
            <div class="card-body">
               @include('todo.table')
            </div>
        </div>
    </div>
</div>
@endsection