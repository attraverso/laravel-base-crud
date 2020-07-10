<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      // if I want to get all the data in the table
      $students = Student::all();
      //the compact() function ferries the variable $students to the view'as is' -> you'll be able to call it from the view using $students
      return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      // get the data the user sent
      $newData = $request->all();
      //create new instance of the Student class
      $newStudent = new Student();
      //fill() automatically tries to match the properties it gets in the request to the columns in your table. If you set a $fillable var in your model, it only looks for the properties listed there
      $newStudent->fill($newData);
      //send data to DB
      $newStudent->save();
      //if you don't redirect and just show the view, in case the user decided to refresh the page the data would be sent to your db all over again. (see post-redirect-get)
      return redirect()->route('students.show', ['student' => $newStudent->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
      $currentStudent = Student::find($id);
      return view('students.show', compact('currentStudent'));
    }

    // the code below does the same thing as the function above (dependency injection)
    // public function show(Student $student) {
    //   return view('students.show', compact('student'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student) {

      return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
      $edited = $request->all();
      $student->update($edited);
      return redirect()->route('students.show', ['student' => $student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletepreview($id) {
      $currentStudent = Student::find($id);
      return view('students.deletepreview', compact('currentStudent'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
      $student->delete();
      return redirect()->route('students.index');
    }
}
