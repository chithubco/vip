<?php

namespace App\Repositories\ExpressionOfInterest;
use App\Repositories\ExpressionOfInterest\ExpressionOfInterestContract;
use App\ExpressionOfInterest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class EloquentExpressionOfInterestRepository implements ExpressionOfInterestContract
{
  public function create($request){
    $eoi = new ExpressionOfInterest;
    $eoi->number_of_hectares = $request->number_of_hectares;
    $eoi->proposed_subscription_date = $request->proposed_subscription_date;
    $eoi->postal_address = $request->postal_address;
    $eoi->occupation = $request->occupation;
    $user = Sentinel::getUser();

    $eoi->user_id = $user->id;
    $eoi->save();
    return $eoi;
  }

  public function findAll(){
    return ExpressionOfInterest::all();
  }

  public function findUser($id){
    return ExpressionOfInterest::where('user_id', $id)->first();
  }
}
