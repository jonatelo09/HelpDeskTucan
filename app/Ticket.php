<?php

namespace App;

use App\Category;
use App\Client;
use App\Priority;
use App\Problem;
use App\Status;
use App\Turn;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {

	public function problem() {
		return $this->belongsTo(Problem::class);
	}

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function client() {
		return $this->belongsTo(Client::class);
	}

	public function turno() {
		return $this->belongsTo(Turn::class);
	}

	public function status() {
		return $this->belongsTo(Status::class);
	}

	public function priority() {
		return $this->belongsTo(Priority::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}
}
