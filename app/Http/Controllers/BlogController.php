<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // this line goes to model and retrieve all data associated with 
        // that model from database.
        // with model you can do all sort of query like orde by , select 
        // we can either use model to do query. this is calle Eloquent
        $blogs = Blog::all();

        //or

        // we can use DB to do query where you can write the query yourself
        //$blogs = DB::select('select * from blogs');

        // paginate with eloquent
        return view('blog.index')->with('blog', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'story' => 'required'
            ]);
        
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->story = $request->input('story');
        $blog->save();
        return redirect('/blog')->with('success', 'Blog Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blog.show')->with('eachblog', Blog::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog.edit')->with('blog', Blog::find($id));
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
        $this->validate($request, [
            'title' => 'required',
            'story' => 'required'
            ]);

        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->story = $request->input('story');
        $blog->save();
        return redirect('/blog')->with('success', 'Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blog')->with('success', 'Blog Deleted');
    }
}
