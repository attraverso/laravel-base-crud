@extends('layouts.app')

@section('page-title', 'student details')

@section('content')
<div class="container mt-3">
  <div class="d-flex justify-content-between align-items-center">
    <h1>You are about to <span class="text-danger">delete</span> student {{$currentStudent->student_id_nr}} 's info</h1>
    <a class="btn btn-secondary" href="{{route('students.index')}}">Back to list</a>
  </div>
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
  <form action="{{route('students.destroy', ['student' => $currentStudent->id])}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Delete student record</button>
  </form>
</div>
@endsection