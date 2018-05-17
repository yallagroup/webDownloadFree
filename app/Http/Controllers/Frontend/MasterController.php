<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Category;
use App\Program;

class MasterController extends Controller
{
    public $categories;
    public $programs;

    public function __construct()
    {
        $this->programs = new Program;
        $this->categories = new Category;

        $mainCategories = $this->categories->where('status', 1)->where('parent_id', null)->get();
        $mainPrograms = $this->programs->where('status', 1)->orderBy('downloads', 'desc')->take(10)->get();

        view()->share('mainCategories', $mainCategories);
        view()->share('mainPrograms', $mainPrograms);
    }
}
