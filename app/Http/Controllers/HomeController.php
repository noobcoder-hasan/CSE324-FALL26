<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
   public function upload(Request $request){
    $student = new Student();
    $student->name = $request->name;
    $student->email = $request->email;
    $image = $request->file;
    if( $image){
        $imageName = time().".".$image->getClientOriginalExtension();
        $image->move('Student', $imageName);
          $student->image = $imageName;
        }

    $student->save();

    return redirect()->back();


   }
   public function show(){
      $student = Student::all();
      return view('show',compact('student'));
   }

   public function delete($id){
      $data = Student::find($id);
      $data->delete();
      return redirect()->back();
       }
}
