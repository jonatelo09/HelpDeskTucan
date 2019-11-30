<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model {
	public function problem_tick() {
		return $this->hasMany(Ticket::class);
	}
}
