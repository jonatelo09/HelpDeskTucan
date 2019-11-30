<?php

namespace App\Http\Controllers\Admin;

class StatusController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
}
