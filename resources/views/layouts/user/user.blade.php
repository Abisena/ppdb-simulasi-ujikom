@extends('layouts.boots.file')
<div class="container h-80 w-10 bg-white text-dark mx-auto p-5 rounded my-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Register</h2>
        <form action="{{route('auth.store')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="usernameInput" class="form-label" >Username</label>
            <input type="text" class="form-control" name="name" id="usernameInput" placeholder="Enter your username">
          </div>
          <div class="mb-3">
            <label for="usernameInput" class="form-label" >Email</label>
            <input type="text" class="form-control"  name="email" id="usernameInput" placeholder="Enter your username">
          </div>
          <div class="mb-3">
            <label for="passwordInput" class="form-label" >Password</label>
            <input type="password" class="form-control" name="password" id="passwordInput" placeholder="Enter your password">
          </div>
          <button class="btn btn-primary" type="submit">Register</button>
            <a href= "/" class="btn btn-primary">Back</a>
        </form>
      </div>
      <div class="col-md-6">
        <img src="data:image/jpeg;base64,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" alt="Image" class="img-fluid" width="1000" height="1000">
      </div>
    </div>
  </div>