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


    return redirect('/form');
  }
}
