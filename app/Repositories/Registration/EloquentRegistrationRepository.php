<?php

namespace App\Repositories\Registration;
use App\Repositories\Registration\RegistrationContract;
use App\Registration;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class EloquentRegistrationRepository implements RegistrationContract
{
  public function create($request){
    $registration = new Registration;
    $registration->phone = $request->phone;
    $registration->alt_email = $request->alt_email;
    $registration->proposed_investment_amount = $request->proposed_investment_amount;
    $registration->amount_paid = $request->amount_paid;
    $registration->bank_name = $request->bank_name;
    $registration->account_name = $request->account_name;
    $registration->account_number = $request->account_number;

    $user = Sentinel::getUser();
    $registration->user_id = $user->id;
    $registration->save();
    return $registration;
  }

  public function findUser($id){
    return Registration::where('user_id', $id)->first();
  }
}
