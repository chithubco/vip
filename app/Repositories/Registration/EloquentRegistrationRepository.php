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
    $registration->next_of_kin_first_name = $request->next_of_kin_first_name;
    $registration->next_of_kin_middle_name = $request->next_of_kin_middle_name;
    $registration->next_of_kin_last_name = $request->next_of_kin_last_name;
    $registration->next_of_kin_relationship = $request->relationship;
    $registration->next_of_kin_phone = $request->next_of_kin_phone;
    $registration->next_of_kin_alt_phone = $request->next_of_kin_alt_phone;
    $registration->next_of_kin_address = $request->next_of_kin_address;
    $registration->number_of_hectares = $request->number_of_hectares;
    $registration->communication_channel = $request->communication_channel;

    $user = Sentinel::getUser();
    $registration->user_id = $user->id;
    $registration->save();
    return $registration;
  }

  public function findUser($id){
    return Registration::where('user_id', $id)->first();
  }
}
