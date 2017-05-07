<?php

namespace App\Repositories\Admin;
use App\Repositories\Admin\AdminContract;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use DB;

class EloquentAdminRepository implements AdminContract
{
  public function createUser($request){
        $phone_no = $request->country_code.$request->phone_number;
        $userDetails = [
            'phone_no' => $phone_no,
            'email' => $request->email,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,

        ];

        $user = Sentinel::registerAndActivate($userDetails, true);
        $role = Sentinel::findRoleBySlug('user');
        $role->users()->attach($user);
        return $user;
    }

    public function edit($request, $id){
      $user = Sentinel::findById($id);
      $credentials = [
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
          'phone_no' => $request->phone_number,
          'email' => $request->email,
      ];

      $user = Sentinel::update($user, $credentials);
      return $user;
    }

    public function updateUserProfile($request){
        $destination = 'uploads/profile';
        $extension = $request->file('profile_picture_path')->getClientOriginalExtension();
        $fileName = rand(1111111, 9999999).'.'.$extension;
        $request->file('profile_picture_path')->move($destination, $fileName);
      $user = Sentinel::getUser();
      $credentials = [
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
          'phone_no' => $request->phone_no,
          'email' => $request->email,
          'address' => $request->address,
          'address_city' => $request->address_city,
          'address_state' => $request->address_state,
          'address_country' => $request->address_country,
          'profile_picture_path' => '/'.$destination.'/'.$fileName,
          'title'=> $request->title,
          'sex' => $request->sex,
          'postal_address'=> $request->postal_address,
          'postal_address_city'=> $request->postal_address_city,
          'postal_address_state'=> $request->postal_address_state,
          'postal_address_country'=> $request->postal_address_country,
      ];
      $user = Sentinel::update($user, $credentials);
      return $user;
    }

    public function allUsers(){
      // dd(Sentinel::findById(1)->roles()->get());
      $role = Sentinel::findRoleBySlug('user');
      // or findRoleBySlug('admin'); for example
      $users = $role->users()->with('roles')->get();
      return $users;
    }

    public function discardUser($id){
      $user = Sentinel::findById($id);
      $user->delete();
      return true;
    }

    public function deactivateUser($id){
      $user = Sentinel::findById($id);
      $user->status = 1;
      $user->save();
      return $user;
    }

    public function activateUser($id){
      $user = Sentinel::findById($id);
      $user->status = 0;
      $user->save();
      return $user;
    }

    public function changePassword($request){
      $user = Sentinel::getUser();
      $credentials = [
        "password" => $request->new_password,
      ];
      $user = Sentinel::update($user, $credentials);
      return $user;
    }
}
