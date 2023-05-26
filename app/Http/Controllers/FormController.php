<?php

namespace App\Http\Controllers;

use App\Models\product;
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
  public function product(Request $request)
  {
    $item = new product();
    $item->product=$request->input('product');
    $item->features=$request->input('feature');
    if($request->hasFile('image')){
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      $imagename = time() . '.' .$extension;
      $image->move('product',$imagename);
      $item->image = $imagename;
    }
    else
    {
      return $request;
      $item ->image = '';
    }
    
    
    $item->save();
    return view('admindashboard');

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
  public function adminlogin_page(Request $request)
  {
    
    return view('adminlogin');
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
  public function adminlogin(Request $request)
  { 
    $email = $request->input('email');
    $password = $request->input('password');
    if($email=="admin@gmail.com" && $password == "admin@123")
    {
      return view('/admindashboard');
    }else{
      return '<h1>Invalid credentials</h1>';
    }
     
    
  }
  
  public function dashboard()
  { 
    $forms = product::all();
    return view('dashboard',compact('forms'));
  }
  public function admindashboard()
  {
    
    return view('admindashboard');
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
  
  

