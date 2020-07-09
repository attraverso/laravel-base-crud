@extends('layouts.app')

@section('page-title', 'students')

@section('content')
<div class="container mt-3">
  <h1>Elenco studenti</h1>
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Student ID #</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($students as $student)
          <tr>
            <th>{{$student->student_id_nr}}</th>
            <th>{{$student->first_name}}</th>
            <th>{{$student->last_name}}</th>
            <th><a class="btn btn-info" href="{{route('students.show', ['student' => $student->id])}}">Details</a></th>
          </tr>
      @empty
          {{ 'There are no results' }}
      @endforelse
    </tbody>
  </table>
</div>
@endsection