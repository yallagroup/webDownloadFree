<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Master
{

	public function childs()
	{
		return $this->hasMany(Category::class, 'parent_id')->get();
	}

	public function programs()
	{
		return $this->hasMany(Program::class)->get();
	}

}
