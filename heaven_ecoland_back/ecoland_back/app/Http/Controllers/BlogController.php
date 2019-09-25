<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get blogs
        $blogs = DB::table('Blog')->get();
        return $blogs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert blog
        $title = $request->get('title');
        $date= $request->get('date');
        $content = $request->get('content');
        $author = $request->get('author');
        $img = $request->get('image');
        DB::table('Blog')->insert(
         ['content'=>$content,
         'date' => $date,
         'author'=> $author,
            'title' => $title,
            'image'=>$img
          ]
     );
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
        // edit blog
        $title = $request->get('title');
        $date= $request->get('date');
        $content = $request->get('content');
        $author = $request->get('author');

        DB::table('Blog')
        ->where('id', $id)
        ->update(['title' => $title,
        'date' => $date,
        'content'=>$content,
        'author' => $author,
       ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete blog by id
        DB::table('Blog')->where('id', '=', $id)->delete();
    }
}
