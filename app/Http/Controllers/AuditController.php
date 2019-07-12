<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuditController extends Controller
{
    //
    public function updateStudent(Request $request,$id){
    $this->validate($request,[
      'name'=>'required',
      'reg_no'=>'required',
      'bursarycleared'=>'required'
    ]);
    $student = User::findOrFail($id);
    $student->name= $request->name;
    $student->reg_no = $request->reg_no;
    $student->bursarycleared = $request->bursarycleared;
    $student->update();
    return $student;
    }
}
