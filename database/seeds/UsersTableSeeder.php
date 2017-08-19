<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adminDetails = [
          'first_name' => 'Super',
          'last_name' => 'admin',
          'phone_no' => '1234567890',
          'email' => 'admin@vip.com',
          'password' => 'secret',
      ];

      $admin = Sentinel::registerAndActivate($adminDetails, true);
      $role = Sentinel::findRoleBySlug('admin');
      $role->users()->attach($admin);

      $userDetails = [
          'first_name' => 'User',
          'last_name' => 'user',
          'phone_no' => '1234567890',
          'email' => 'user@vip.com',
          'password' => 'secret',
      ];

      $user = Sentinel::registerAndActivate($userDetails, true);
      $role = Sentinel::findRoleBySlug('user');
      $role->users()->attach($user);

      $userDetails1 = [
          'first_name' => 'favor',
          'last_name' => 'oriabs',
          'phone_no' => '1234567890',
          'email' => 'favoriabs@vip.com',
          'password' => 'secret',
      ];

      $user = Sentinel::registerAndActivate($userDetails1, true);
      $role = Sentinel::findRoleBySlug('user');
      $role->users()->attach($user);
    }
}
