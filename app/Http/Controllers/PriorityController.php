<?php

namespace App\Http\Controllers;

class PriorityController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
}
