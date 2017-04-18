<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Registration\RegistrationContract;
	use App\Repositories\ExpressionOfInterest\ExpressionOfInterestContract;
	use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

	class RegistrationController extends Controller
	{

			protected $repo;
			protected $eoiRepo;

			public function __construct(RegistrationContract $registrationContract, ExpressionOfInterestContract $eoi) {
				$this->repo = $registrationContract;
				$this->eoiRepo = $eoi;
			}

	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index()
	    {
					$user = Sentinel::getUser();
					if($user == null){
						return redirect()->route('home');
					}
					$registration = $this->repo->findUser($user->id);
					$eois = $this->eoiRepo->findAll();
					return view('registration.create')->with('user', $user)->with('eois', $eois)->with('registration', $registration);
	    }

	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
	        //
	    }

	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request)
	    {
	        $this->validate($request, [
						"proposed_investment_amount" => "required",
						"amount_paid" => "required",
						"bank_name" => "required",
						"account_name" => "required",
						"account_number" => "required",
					]);
					$reg = $this->repo->create($request);
					if($reg->id){
						return redirect()->back()
														->with('success', 'Registration Successful');
					}else{
						return back()
										->withInput()
										->with('error', 'Registration not Successful. Try Again!!!');
					}
	    }

	    /**
	     * Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
	        //
	    }

	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
	        //
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
	    public function delete($id)
	    {
	        //
	    }
	}
