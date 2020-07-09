@extends('layouts.app')

@section('page-title', 'student details')

@section('content')
<div class="container mt-3">
  <h1>You are <span class="text-info">viewing</span> student {{$currentStudent->student_id_nr}} 's data</h1>
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Student ID #</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
          <tr>
            <th>{{$currentStudent->student_id_nr}}</th>
            <th>{{$currentStudent->first_name}}</th>
            <th>{{$currentStudent->last_name}}</th>
            <th>{{$currentStudent->email}}</th>
          </tr>
    </tbody>
  </table>
</div>
@endsection