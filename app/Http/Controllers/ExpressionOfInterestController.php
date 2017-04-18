<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ExpressionOfInterest\ExpressionOfInterestContract;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\ExpressionOfInterest;

class ExpressionOfInterestController extends Controller
{
		protected $repo;

		public function __construct(ExpressionOfInterestContract $expressionOfInterestContract) {
			$this->repo = $expressionOfInterestContract;
		}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Sentinel::getUser();
				if($user == null){
					return redirect()->route('home');
				}
				$eoi = $this->repo->findUser($user->id);
				return view('expressionofinterest.create')->with('user', $user)->with('eoi', $eoi);
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
				 'number_of_hectares' => 'required|numeric',
				 'proposed_subscription_date' => 'required',
				 'postal_address' => 'required',
				 'occupation' => 'required',
			 ]);
			 $eoi = $this->repo->create($request);
			 if($eoi){
	       return redirect()->back()
	               ->with('success', 'Interest form submitted successfully');
	     }else{
	       return back()
	               ->withInput()
	               ->with('error', 'Interest form submission was not Successful. Try Again!!!');
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
    public function edit(Request $request, $id)
    {
			$this->validate($request, [
			 'number_of_hectares' => 'required|numeric',
			 'proposed_subscription_date' => 'required',
			 'postal_address' => 'required',
			 'occupation' => 'required',
		 ]);
		 $eoi = $this->repo->edit($request, $id);
		 if($eoi){
			 return redirect()->back()
							 ->with('success', 'Interest form updated successfully');
			 }else{
				 		return back()
								 ->withInput()
								 ->with('error', 'Interest form submission was not updated. Try Again!!!');
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
    public function delete($id)
    {
        //
    }
}
