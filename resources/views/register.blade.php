@extends('layouts.layout')

@section('content')

<div class="my-5">
    <div>
        <h2>Factory Pattern Implementation</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('user.register.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group my-3">
                            <input type="text" name='name' value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" />
                            @error('name')
                            <span class="message">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <input type="text" name='email' value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" />
                            @error('email')
                            <span class="message">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <input type="text" name='phone_number' value="{{old('phone_number')}}" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter Phone Number" />
                            @error('phone_number')
                            <span class="message">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group my-3">
                            <input type="password" name='password' value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" />
                            @error('password')
                            <span class="message">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection