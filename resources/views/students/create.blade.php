@extends('layouts.app')

@section('page-title', 'Add student')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Add student</h1>
      <a class="btn btn-secondary" href="{{route('students.index')}}">Back to list</a>
    </div>
    <form action="{{route('students.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="firstname-input">First name</label>
        <input type="text" class="form-control" id="firstname-input" name="first_name" required>
      </div>
      <div class="form-group">
        <label for="lastname-input">Last name</label>
        <input type="text" class="form-control" id="lastname-input" name="last_name" required>
      </div>
      <div class="form-group">
        <label for="student-id-input">Student ID #</label>
        <input type="text" class="form-control" id="student-id-input" name="student_id_nr" required>
      </div>
      <div class="form-group">
        <label for="email-input">Email address</label>
        <input type="email" class="form-control" id="email-input" name="email">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection

