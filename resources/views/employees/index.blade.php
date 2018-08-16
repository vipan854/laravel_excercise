@extends('layouts.default')

@section('content')

<div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($employees as $employee)
      <tr>
        <td align="left">{{$employee['name']}}</td>
        <td align="left">{{$employee['email']}}</td>
        <td align="left">{{$employee['address']}}</td>
        
        <td align="left">
            <a href="{{action('EmployeeController@edit', $employee['id'])}}" class="btn btn-warning">Edit</a>
            <form action="{{action('EmployeeController@destroy', $employee['id'])}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

@stop