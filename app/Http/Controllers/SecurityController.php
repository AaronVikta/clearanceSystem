<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\StudentResource;

class SecurityController extends Controller
{
    //update the user with a given attributes
    public function updateStudent(Request $request,$id){
    $this->validate($request,[
      'name'=>'required',
      'reg_no'=>'required',
      'securitycleared'=>'required'
    ]);
    $student = User::findOrFail($id);
    $student->name= $request->name;
    $student->reg_no = $request->reg_no;
    $student->securitycleared = $request->securitycleared;
    $student->update();
    return $student;
    }
}
