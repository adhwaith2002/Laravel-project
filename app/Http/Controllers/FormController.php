<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
  public function index()
  {
    return view('form');
  }
 
  public function register(Request $request)
  {
    $request->validate(
        [
            'name' => 'required',
            
            'email' => 'required|email'
        ]
        );

    $form = new Form;
    $form ->name=$request->input('name');
    $form ->course=$request->input('course');
    $form ->gender=$request->input('gender');
    $form ->email=$request->input('email');
    $form -> save();

   
    return redirect('/crud');
  }

  public function showall()
  {
    $forms = Form::all();
    return view('crud',compact('forms'));
  }
  public function delete($id)
  {
     $data = form::find($id);
     $data->delete();
     return redirect()->back();
  }
  public function update_view($id)
  {
    $update = form::find($id);
    return view('update_page',compact('update'));
  }
  public function update(Request $request,$id)
  {
      $form = form::find($id);
      $form->name = $request->name;
      $form->course = $request->course;
      $form->gender = $request->gender;
      $form->email = $request->email;
      $form->save();
      return redirect()->back();
  }
  
}
