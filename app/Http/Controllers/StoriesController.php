<?php

namespace App\Http\Controllers;
use App\Models\Libreria\User_history;
use Illuminate\Http\Request;
use App\Models\Libreria\Category;
use App\Models\Book_Category;
use App\Models\Libreria\Book;
use App\Models\User;

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
        $stories = User_history::orderBy('id','ASC')->paginate(3);
        //$libros = Libro::orderBy('id','ASC')->paginate(5);
       // return view('library.Libros.index')->with('libros', $libros);
       return view('Historias.index')->with('historias',$stories)
                    ->with('categorias',$categorias);
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
        if($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/movi/imagesHistorys/', $nombre);
            $filePath=$nombre;
        }

        $historia = new user_history();
        $email= session()->get('email');
        $categoria=$request->input('idCategory');
        if($email){
            $historia->title=  $request->input('title');
            $historia->cover_image= $request->input('cover_image');
            $historia->text= $request->input('text');
            $historia->price= $request->input('price');
            $historia->cover_image= $filePath;
            $historia->dateP= $request->input('dateP');
            $historia->idCategoria= $categoria;
            $historia->email= $email;
            $historia->save();
            
            $id = User_history::latest('id')->first();

            $idL=$id->id;
            $history=User_history::find($idL);
            $categoria=Category::find( $categoria) ;      
            $escritor=User::find($email);
            $request->session()->flash('alert-success', 'Historia guardada correctamente!');
            
            return view('Historias/show')->with('history',$history)
                        ->with('escritor', $escritor)
                        ->with('category',  $categoria);
            }

            $books= Book::latest()->take(4)->get();
            return view('home') ->with('libros', $books);
        
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
