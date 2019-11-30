<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model {
	public function ticket_turn() {
		return $this->hasMany(Ticket::class);
	}
}
