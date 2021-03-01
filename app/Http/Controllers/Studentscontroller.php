<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class Studentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
      $students = Student::all();
      return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
         $request ->validate([
            'name' => 'required',
            'nrp' => 'required|min:9|max:9',
            'email' => 'required|unique:students',
            'course' => 'required'
          ]);
         
         Student::create($request ->all());
        
         return redirect('students') ->with('notif', 'Data success inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        $request ->validate([
            'name' => 'required',
            'nrp' => 'required|min:9|max:9',
            'email' => 'required',
            'course' => 'required'
          ]);
          
          Student:: where('id', $student ->id)
          -> update([
            'name' => $request ->name,
            'nrp' => $request ->nrp,
            'email' => $request ->email,
            'course' => $request ->course
          ]);
          
        return redirect('students') ->with('notif', 'Data success edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student ->id);
        return redirect('students') ->with('notif', 'Data success deleted');
    }
}
