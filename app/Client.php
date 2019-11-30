<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Client extends Model {
	public function tickets_client() {
		return $this->hasMany(Ticket::class);
	}
}
