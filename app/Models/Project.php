<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

	public function user() {
		return $this->belongsTo(User::class, 'user_id');
	}
	
	public function scopeFilter($query, array $filters) {

		foreach($filters as $key => $value) {
			if($key != 'sort') 
				$query->where($key, 'like', '%' . $value . '%');
			}
}

}