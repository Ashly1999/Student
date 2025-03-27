<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student=Student::all();
        return view('student_view',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         $user=User::Create([

            'username'=>$request->uname,
            'password'=>$request->psw,
         ]);
         return redirect()->route('student.view')->with('success',"login successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view('admin_edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student=Student::find($id);
        $student->update([

            '$first_name'=>$request->fname,
            '$last_name' => $request->lname,
            '$email' => $request->email,
            '$number' => $request->number,
            '$course' => $request->course,
            '$username' => $request->uname,
            '$password' => $request->psw,
        ]);
        return redirect()->route('student.view')->with('success', "updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('student.view')->with('success', "deleted successfully");
    }
}
