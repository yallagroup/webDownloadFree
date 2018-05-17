<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Program;
use App\File;
use Illuminate\Support\Facades\Auth;

class ProgramsController extends Controller
{
    public $categories;
    public $programs;
    public $perPage = 20;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category, Program $program)
    {
        $this->categories = $category;
        $this->programs = $program;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = $this->programs->where('status', 1)->paginate($this->perPage);
        return view('backend.modules.programs.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categories->where('status', 1)->get();
        return view('backend.modules.programs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'         => 'required|min:3|max:250',
            'icon'          => 'required|image|mimes:jpg,jpeg,png',
            'file'          => 'nullable',
            'description'   => 'nullable|min:10|max:6000',
        ]);

        $icon = $request->file('icon');
        $icon_name = 'icon_' . time() . rand(1000,9999) . '.' . $icon->getClientOriginalExtension();
        $icon->move(public_path('uploads/images'), $icon_name);

        $file = $request->file('file');

        if($file != null){
            $file_name = 'app_' . time() . rand(1000,9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/files'), $file_name);
        }

        $program = $this->programs->create([
            'category_id'   =>  $request->category_id,
            'user_id'       =>  Auth::id(),
            'slug'          =>  str_slug($request->title,'-',config('app.locale')),
            'title'         =>  $request->title,
            'icon'          =>  $icon_name,
            'url'           =>  $request->url,
            'description'   =>  $request->description
        ]);

        if($file != null) {
            File::create([
                'program_id' => $program->id,
                'name' => $file_name,
            ]);
        }

        session()->flash('message', trans('backend/messages.success.created'));

        return redirect()->route('programs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = $this->programs->find($id);
        $categories = $this->categories->where('status', 1)->get();

        return view('backend.modules.programs.update', compact('item','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $program = $this->programs->find($id);

        $this->validate($request,[
            'title'         => 'required|min:3|max:250',
            'icon'          => 'nullable|image|mimes:jpg,jpeg,png',
            'file'          => 'nullable',
            'description'   => 'nullable|min:10|max:6000',
        ]);

        $icon = $request->file('icon');
        if($icon != null)
        {
            $icon_name = 'icon_' . time() . rand(1000,9999) . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('uploads/images'), $icon_name);
        }

        $this->programs->where('id', $id)->update([
            'category_id'   =>  $request->category_id,
            //'slug'          =>  str_slug($request->title,'-',config('app.locale')),
            'title'         =>  $request->title,
            'icon'          =>  $icon != null ? $icon_name : $program->icon,
            'description'   =>  $request->description,
            'url'           =>  $request->url,
        ]);


        $file = $request->file('file');

        if($file != null){
            $file_name = 'app_' . time() . rand(1000,9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/files'), $file_name);

            if($program->files->count() > 0)
            {
                File::where('program_id', $id)->update([
                    'name' => $file_name,
                ]);
            } else {
                File::create([
                    'program_id' => $id,
                    'name' => $file_name,
                ]);
            }
        }

        session()->flash('message', trans('backend/messages.success.updated'));

        return redirect()->route('programs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$this->programs->where('id', $id)->delete();
        $this->programs->where('id', $id)->update(['status' => 0]);

        session()->flash('message', trans('backend/messages.success.deleted'));

        return redirect()->route('programs.index');
    }
}
