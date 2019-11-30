<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketImage extends Model {
	//$productImages->product
	public function product() {
		return $this->belongsTo(Product::class);
	}

	//accesor
	public function getUrlAttribute() {
		if (substr($this->image, 0, 4) === "http") {
			return $this->image;
		}

		return '/images/ticket/' . $this->image;

	}
}
