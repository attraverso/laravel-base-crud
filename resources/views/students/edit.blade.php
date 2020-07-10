@extends('layouts.app')

@section('page-title', 'Add student')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Edit student info</h1>
      <a class="btn btn-secondary" href="{{route('students.index')}}">Back to list</a>
    </div>
    <form action="{{route('students.update', ['student' => $student->id])}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="firstname-input">First name</label>
        <input type="text" class="form-control" id="firstname-input" name="first_name" value="{{old('email', $student->first_name)}}" required>
      </div>
      <div class="form-group">
        <label for="lastname-input">Last name</label>
        <input type="text" class="form-control" id="lastname-input" name="last_name" value="{{old('email', $student->last_name)}}" required>
      </div>
      <div class="form-group">
        <label for="student-id-input">Student ID #</label>
        <input type="text" class="form-control" id="student-id-input" name="student_id_nr" value="{{old('email', $student->student_id_nr)}}" required>
      </div>
      <div class="form-group">
        <label for="email-input">Email address</label>
        <input type="email" class="form-control" id="email-input" name="email" value="{{old('email', $student->email)}}">
      </div>
      <button type="submit" class="btn btn-warning">Edit info</button>
    </form>
  </div>
@endsection

