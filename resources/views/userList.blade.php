<!DOCTYPE html>
@extends('layouts.default')
 
 @section('content')
  
 <div class="container">
  <h2>User List</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($userList as $user)
      <tr>
        <td><a href="user/{{$user->userId}}">{{$user->firstName}}</a></td>
        <td>{{$user->firstName}}</td>
        <td>{{$user->email}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 @stop
