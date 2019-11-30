<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Status extends Model {
	public function ticket_status() {
		return $this->hasMany(Ticket::class);
	}
}
