@extends('layout')
@section('title','login')
@section('content')
<div class="container">
    
    @if (session()->has('errorLogin'))
    <div class="alert alert-danger">{{ session('errorLogin') }}</div>
@endif

    <!-- <form action="{{route('login.post')}}" method="POST" class="ms-auto me=auto mt-5" style="width: 500px">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
       <button type="submit" class="btn btn-primary">Login</button>
      </form>
</div> -->

<form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>

@endsection

@extends('layout')
@section('title', 'Register')
@section('content')
<div class="container">
    <div class="mt-5">
        @if ($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif

        @if (session()->has('errorRegist'))
            <div class="alert alert-danger">{{ session('errorRegist') }}</div>
        @endif

        @if (session()->has('successRegist'))
            <div class="alert alert-success">{{ session('successRegist') }}</div>
        @endif

    </div>
    <form action="{{ route('regist.post') }}" method="POST" class="ms-auto me-auto mt-5" style="width: 500px">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
