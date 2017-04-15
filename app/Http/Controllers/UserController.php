<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Repositories\Admin\AdminContract;
use Illuminate\Http\Request;

class UserController extends Controller
{
  protected $adminRepo;
  public function __construct(AdminContract $adminContract){
    $this->adminRepo = $adminContract;
  }
  public function index(){
    $user = Sentinel::getUser();
    return view('user.index')->with('user', $user);
  }

  public function profile(){
    $user = Sentinel::getUser();
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

  public function interest(){
    return 5;
  }
}
