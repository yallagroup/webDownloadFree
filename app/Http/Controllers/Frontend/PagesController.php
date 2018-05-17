<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends MasterController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function homepage()
    {
        $homeCategories = $this->categories->where('status', 1)->with('programs')->where('parent_id', null)->get();
        $latestPrograms = $this->programs->where('status', 1)->latest()->take(20)->get();
        return view('frontend.modules.pages.home', compact('homeCategories', 'latestPrograms'));
    }
}
