<?php

namespace App\Repositories\Registration;

interface RegistrationContract
{
	public function create($request);
  public function findUser($id);
}
