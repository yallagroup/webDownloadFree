<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Program;

class CategoriesController extends Controller
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
        $this->middleware('auth');
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
        $items = $this->categories->where('status', 1)->where('parent_id', null)->paginate($this->perPage);
        return view('backend.modules.categories.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categories->where('status', 1)->get();
        return view('backend.modules.categories.create', compact('categories'));
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
            'title'         => 'required|min:2|max:250',
            'description'   => 'nullable|min:10|max:6000',
        ]);

        $this->categories->create([
            'parent_id'     =>  $request->parent_id,
            'slug'          =>  str_slug($request->title,'-',config('app.locale')),
            'title'         =>  $request->title,
            'description'   =>  $request->description
        ]);

        session()->flash('message', trans('backend/messages.success.created'));

        return redirect()->route('categories.index');
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
        $item = $this->categories->find($id);
        $categories = $this->categories->where('status', 1)->get();

        return view('backend.modules.categories.update', compact('item','categories'));
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
        $this->validate($request,[
            'title'         => 'required|min:2|max:250',
            'description'   => 'nullable|min:10|max:6000',
        ]);

        $this->categories->where('id', $id)->update([
            'parent_id'     =>  $request->parent_id,
            //'slug'          =>  str_slug($request->title,'-',config('app.locale')),
            'title'         =>  $request->title,
            'description'   =>  $request->description
        ]);

        session()->flash('message', trans('backend/messages.success.updated'));

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //=> check if has child categories
        $childs = $this->categories->where('parent_id', $id)->count();
        if($childs)
            $this->categories->where('parent_id', $id)->update(['parent_id' => $this->categories->where('parent_id', null)->first()->id]);

        //=> check if has related programs
        $programs = $this->programs->where('category_id', $id)->count();
        if( $programs )
            $this->programs->where('category_id', $id)->update(['category_id' => $this->categories->where('parent_id', null)->first()->id]);

        //$this->categories->where('id', $id)->delete();
        $this->categories->where('id', $id)->update(['status' => 0]);

        session()->flash('message', trans('backend/messages.success.deleted'));

        return redirect()->route('categories.index');
    }
}
