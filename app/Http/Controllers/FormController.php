<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    $form = new User;
    $form ->name=$request->input('name');
    $form ->course=$request->input('course');
    $form ->gender=$request->input('gender');
    $form ->email=$request->input('email');
    $p=$request->input('password');
    $hashed = Hash::make($p);
    $form->password=$hashed;
    $form -> save();

   
    return redirect('/form');
  }

  public function showall()
  {
    $forms = User::all();
    return view('crud',compact('forms'));
  }
  public function delete($id)
  {
     $data = user::find($id);
     $data->delete();
     return redirect()->back();
  }
  public function update_view($id)
  {
    $update = user::find($id);
    return view('update_page',compact('update'));
  }
  public function update(Request $request,$id)
  {
      $form = user::find($id);
      $form->name = $request->name;
      $form->course = $request->course;
      $form->gender = $request->gender;
      $form->email = $request->email;
      
      $form->save();
      return redirect()->back();
  }
  public function login_page(Request $request)
  {
    
    return view('login');
  }
  public function login(Request $request)
  { 
    $form = User::where('email','=',$request->email)->first();
    if(auth()->attempt(request()->only(['email','password'])))
        {
           return view('/dashboard',compact('form'));
        }
        
        return '<h1>Invalid credentials</h1>';
    
  }
  public function dashboard()
  {
    return view('dashboard');
  }
  
  public function userdelete($id)
  {
    $data = user::find($id);
    $data->delete();
    return view('login'); 
  }
 public function useredit($id)
 {
  $update = user::find($id);
  return view('edit_page',compact('update'));
 } 
 public function edit(Request $request,$id)
 {
  $form = user::find($id);
  $form->name = $request->name;
  $form->course = $request->course;
  $form->gender = $request->gender;
  $form->email = $request->email;
  
  $form->save();
  return redirect()->back(); 
 } 

  }
  
  

