<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Admin\AdminContract;
use App\Repositories\Message\MessageContract;
use App\Repositories\ExpressionOfInterest\ExpressionOfInterestContract;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use DB;


class AdminController extends Controller
{

		protected $repo;
		protected $eoiRepo;
		protected $messageRepo;

		public function __construct(AdminContract $adminContract, ExpressionOfInterestContract $eoi, MessageContract $msgContract) {
			$this->repo = $adminContract;
			$this->eoiRepo = $eoi;
			$this->messageRepo = $msgContract;
		}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$messages = $this->messageRepo->findAll();
			$role = Sentinel::findRoleBySlug('user');
			$numOfUsers = $role->users()->count();
			  $user = Sentinel::getUser();
        return view('admin.index')->with('user', $user)->with('numOfUsers', $numOfUsers)->with('messages', $messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
			$this->validate($request, [
          	'first_name' => 'required',
						'last_name' => 'required',
          	'phone_number' => 'required',
          	'email' => 'required',
						'password' => 'required',
						'confirm_email' => 'required',
						'confirm_password' => 'required',

      	]);
				if($request->email != $request->confirm_email) {
					return back()
								->withInput()
								->with('error', 'Email does not match. Try Again!!!');
				}
				if($request->password != $request->confirm_password) {
					return back()
								->withInput()
								->with('error', 'Password does not match. Try Again!!!');
				}
      	$user = $this->repo->createUser($request);
				if($user->id){
					return redirect()->route('get_login')
													->with('success', 'Registration Successful');
				}else{
					return back()
									->withInput()
									->with('error', 'Registration not Successful. Try Again!!!');
				}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUsers()
    {
			  $user = Sentinel::getUser();
				if($user == null){
					return redirect()->route('home');
				}
        $users = $this->repo->allUsers();
				return view('admin.users')->with('users', $users)->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUser(Request $request, $id)
    {
			$this->validate($request, [
						'first_name' => 'required',
						'last_name' => 'required',
						'phone_number' => 'required',
						'email' => 'required',
				]);

				$user = $this->repo->edit($request, $id);
				if($user){
					return redirect()->back()
									->with('success', 'User updated successfully');
				}else{
					return back()
									->withInput()
									->with('error', 'User update was not Successful. Try Again!!!');
				}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id)
    {
      $user = $this->repo->discardUser($id);
			if($user){
				return redirect()->back()
								->with('success', 'User was deleted successfully');
			}else{
				return back()
							->with('error', 'Could not delete this user. Try again!');
			}
    }

		public function deactivateUser($id){
			$user = $this->repo->deactivateUser($id);
			if($user){
				return back()
								->with('success', 'User has been de-activated');
			}else{
				return back()
									->with('error', 'There was an error de-activatiion, Try again!!!');
			}
		}

		public function activateUser($id){
			$user = $this->repo->activateUser($id);
			if($user){
				return back()
								->with('success', 'User has been activated');
			}else{
				return back()
									->with('error', 'There was an error during activatiion, Try again!!!');
			}
		}

		public function usersInterest(){
			$user = Sentinel::getUser();
			$users = DB::table('users')->get();
			$eois = $this->eoiRepo->findAll();
			return view('admin.users_interest')->with('eois', $eois)->with('users', $users)->with('user', $user);
		}

		public function terms(){
			return view('terms');
		}
}
