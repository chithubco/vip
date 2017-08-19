<?php

namespace App\Repositories\Admin;

interface AdminContract
{
  public function createUser($request);
  public function edit($request, $id);
  public function allUsers();
  public function deactivateUser($id);
  public function activateUser($id);
  public function updateUserProfile($request);
  // public function findById($id);
  // public function discard($id);
}
