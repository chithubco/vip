<?php

namespace App\Repositories\ExpressionOfInterest;

interface ExpressionOfInterestContract
{
	public function create($request);
	public function findAll();
	public function findUser($id);
	public function edit($request, $id);
}
