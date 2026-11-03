<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Form;

class AuthController extends Controller
{
     public function dashboard()
    {
        if (Auth::check()) {
        $active = 'dashboard';
        $users = User::count();
        $blog = Blog::count();
        $form = Form::count();
        return view('admin.control.dashboard')->with(compact('users', 'blog', 'form'));
        }
        Session::flash('errormessage', "Opps! You do not have Access. Login to Gain Access");
       return redirect("login");
    }
    public function postLogin(Request $request): RedirectResponse
{
    $request->validate([
        'email'    => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        Session::flash('successmessage', "Logged In Successfully");
        return redirect()->route('admin.dashboard');
    }
     Session::flash('errormessage', "Oops! You have entered invalid credentials");
   return redirect()->route('login');
}

     public function adduser(): View
  {
     $active = 'adduser';
     return view('admin.auth.adduser')->with(compact('active'));
  }
   public function userCreate(Request $request): RedirectResponse
  {
    $request->validate([
      'name'     => 'required',
      'email'    => 'required|email|unique:users',
      'password' => 'required|min:8',
    ]);

    $data  = $request->all();
    $check = $this->create($data);

    Session::flash('successmessage', "New User Added Successfully !");
    return redirect()->back();
  }
  /**
   * Write code on Method
   *
   * @return response()
   */
  public function create(array $data)
  {
    return User::create([
      'name'             => $data['name'],
      'email'            => $data['email'],
      'password'         => Hash::make($data['password']),
      'is_active'        => $data['is_active'],
    ]);
  }
    public function logout(): RedirectResponse
  {
    Session::flush();
    Auth::logout();
    Session::flash('infomessage', "Logout successfull !");
    return Redirect()->route('login');
  }
}
