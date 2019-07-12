<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FacultyController extends Controller
{
    //
    public function updateStudent(Request $request,$id){
    $this->validate($request,[
      'name'=>'required',
      'reg_no'=>'required',
      'facultycleared'=>'required'
    ]);
    $student = User::findOrFail($id);
    $student->name= $request->name;
    $student->reg_no = $request->reg_no;
    $student->facultycleared = $request->facultycleared;
    $student->update();
    return $student;
    }
}
