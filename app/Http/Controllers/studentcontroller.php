<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Repositories\studentRepository1;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{   
    protected $student;  
    public function __construct(studentRepository1 $student)
    {
        $this->student = $student; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $student = $this->student->all();
        // $student = student::all();
        return  $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        // $this->student->store($request->all()); 
        $student = new Student();
        $student->fullname = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->school = $request->school;
        $student->refer = $request->refer;
       
        $student->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);
        return view('show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $student = student::find($id);
        $student = $this->student->get($id);
        return view('edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request)
    {
        // $student = student::find($id);
        // $student->fullname = $request->name;
        // $student->address = $request->address;
        // $student->mobile = $request->mobile;
        // $student->school = $request->school;
        // $student->refer = $request->refer;
        // $student->update();
        $request->validate([
            'fullname'=>'',
            'address'=>'',
            'mobile'=>'',
            'school'=>'',
            'refer'=>'',

        ]);
        
         $student = $this->student->update($id,$request->all());
         return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //    
    $student = $this->student->delete($id);
    return redirect('/');
    }
}
