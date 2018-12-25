<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Traits\Orderable;
use App\Models\Traits\HasChildren;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use HasChildren, Orderable;

	protected $fillable = [
		'name',
		'slug',
		'order'
	];

	public function children()
    {
    	return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
