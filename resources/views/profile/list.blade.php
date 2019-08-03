@extends('layouts.master')

@section('content')
  <div class="container">
  <div class="padding"></div>
    <h1 style="text-align:center">Users</h1>
  <div class="container table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Tools Wanted</th>
        <th>Access Level</th>
        <th>Created At</th>
        <th>Last Updated</th>
      </tr>
    </thead>
    
    <tbody>
    @foreach ($userlist as $user)
      <tr>
        <td><a href="/users/{!! $user->id !!}"> {{ ucwords($user->id) }}</td>
        <td>{{ $user->fname }}</td>
        <td>{{ $user->lname }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->tools }}</td>
        <td>{{ $user->access }}</td>
        <td>{{ date('l, F j, Y H:i', strtotime($user->created_at)) }}</td>
        <td>{{ date('l, F j, Y H:i', strtotime($user->updated_at)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> 

  </div>
@endsection
