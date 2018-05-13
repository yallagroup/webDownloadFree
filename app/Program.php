<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Master
{

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
