<?php

namespace App\Http\Controllers;
use App\Models\Libreria\user_history;
use Illuminate\Http\Request;
use App\Models\Libreria\Category;


class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::orderby('id', 'asc')->get();
        $stories = user_history::orderBy('id','ASC')->paginate(6);
        //$libros = Libro::orderBy('id','ASC')->paginate(5);
       // return view('library.Libros.index')->with('libros', $libros);
       return view('Library.Index')->with('libros',$stories)->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::orderby('id', 'asc')->get();
        return view('Historias/create')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *'email','title', 'cover_image','text','price','dateP'
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filePath='';
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/movi/imagesBooks/', $nombre);
            $filePath=$nombre;
        }
        $historia = new user_history();
        $historia->email=  $request->input('email');
        $historia->title=  $request->input('title');
        $historia->cover_image= $request->input('cover_image');
        $historia->text= $request->input('text');
        $historia->price= $request->input('price');
        $historia->image= $filePath;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
