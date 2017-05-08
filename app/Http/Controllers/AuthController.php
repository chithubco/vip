<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Illuminate\Http\Request;
use App\Library\Email;
use DB;
use Mail;
use App\Mail\PasswordReset;
use App\User;

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
                    if($user->login_status == 0){
                      $credentials = [
                        'login_status' => 1
                      ];
                      Sentinel::update($user, $credentials);
                      return redirect()->route('user_profile');
                    }else{
                      return redirect()->route('user_dashboard');
                    }
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

    public function recover(){
      return view('password.emailview');
    }

    public function sendEmail(Request $request){
      // $user = DB::table('users')->where('email', $request->email)->first();
      $user = User::where('email', $request->email)->first();
      if(!$user){
        return back()
              ->withInput()
              ->with('error', 'Your email doesn"t exist on our database');
      }else{
      Mail::to($user)->send(new PasswordReset($user));
      // $email = new Email();
      // $e = $email->passwordRecovery($user, $request->email);
      return back()
                ->withInput()
		    	      ->with('success', 'Check your email!!!');
        }
    }

    public function newPasswordView($id){
      return view('password.recover')->with('id', $id);
    }

    public function doPasswordRecovery(Request $request){
      $this->validate($request, [
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        if($request->password != $request->confirm_password){
          return back()
                  ->with('error', 'The passwords don"t match');
        }else{
          $user = Sentinel::findById($request->id);
          $user->password =  bcrypt($request->password);
          $user->save();
            return redirect()->route('get_login')
                    ->with('success', 'Password updated successfully');
        }
    }
}
