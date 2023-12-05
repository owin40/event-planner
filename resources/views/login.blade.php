@extends('layout')
@section('title','login')
@section('content')
<div class="container">
    
    @if (session()->has('errorLogin'))
    <div class="alert alert-danger">{{ session('errorLogin') }}</div>
@endif

    <form action="{{route('login.post')}}" method="POST" class="ms-auto me=auto mt-5" style="width: 500px">
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