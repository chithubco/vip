<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Repositories\Admin\AdminContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  protected $adminRepo;
  public function __construct(AdminContract $adminContract){
    $this->adminRepo = $adminContract;
  }
  public function index(){
    $user = Sentinel::getUser();
    if($user == null){
      return redirect()->route('home');
    }
    return view('user.index')->with('user', $user);
  }

  public function profile(){
    $user = Sentinel::getUser();
    if($user == null){
      return redirect()->route('home');
    }
    return view('user.profile')->with('user', $user);
  }

  public function updateProfile(Request $request){
    $user = $this->adminRepo->updateUserProfile($request);
    if($user){
      return redirect()->back()
              ->with('success', 'Profile updated successfully');
    }else{
      return back()
              ->withInput()
              ->with('error', 'Profile update was not Successful. Try Again!!!');
    }
  }

  public function settings(){
    $user = Sentinel::getUser();
    return view('user.settings')->with('user', $user);
  }

  public function changePassword(Request $request){
    $hasher = Sentinel::getHasher();
    $this->validate($request, [
      "old_password" => "required",
      "new_password" => "required",
      "confirm_password" => "required",
    ]);
    $user = Sentinel::getUser();
    if(!$hasher->check($request->old_password, $user->password) || ($request->new_password != $request->confirm_password)){
      return back()
                ->with('error', 'Your input is not correct. Make sure your old password is correct and your new password is confirmed. Try Again!!!');
    }else{
      $user->password =  bcrypt($request->new_password);
      $user->save();
      return redirect()->back()
              ->with('success', 'Password updated successfully');
    }
  }

  public function downloadPdf(){
    $file= public_path(). "/pdf/form.pdf";
   return \Response::download($file);
  }
}
