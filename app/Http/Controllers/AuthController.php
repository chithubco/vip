<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function index(){
    // return view('index');
    return view('login');
  }
   public function getLogin(){
     return view('login');
   }

   public function postLogin(Request $request) {

        $this->validate($request, [
           'email'  => 'required',
           'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $user = Sentinel::authenticate($credentials);

        if(!Sentinel::authenticate($credentials)) {
            return redirect()->back()->withInput()->with('error', 'Your Login Credentials did not match');
        }elseif($user->status == 1){
            return redirect()->back()->withInput()->with('error', 'Your Account has been de-activated, Contact the administrator');
        }
        else{

                Sentinel::login($user);
                session(['currentUser' => $user]);

            try {

                if (Sentinel::getUser()->inRole('admin')) {
                    session(['currentUserRole' => 'admin']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('admin_dashboard');

                }
                else if (Sentinel::getUser()->inRole('user')) {
                    session(['currentUserRole' => 'user']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('user_profile');
                }


            } catch (BadMethodCallException $e) {
                return redirect()->route('home')
                        ->with('error', 'Your Session has expired. Please login again!');
            }
        }
    }

    public function register(){
      return view('register');
    }

    public function logout() {
        try {
            Sentinel::logout(null, true);
            session()->flush();
            return redirect()->route('get_login');
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return redirect()->route('get_login');
        } catch (\ErrorException $e) {
            return redirect()->route('get_login')
                ->with('error', 'Session expired. Login again!');
        }
    }
}
