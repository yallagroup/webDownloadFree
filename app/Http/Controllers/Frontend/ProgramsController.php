<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramsController extends MasterController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show($id, $slug)
    {
        $program = $this->programs->find($id);

        $program->increment('views');

        return view('frontend.modules.programs.show', compact('program'));
    }
}
