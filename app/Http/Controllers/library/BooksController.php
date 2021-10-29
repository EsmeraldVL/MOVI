<?php

namespace App\Http\Controllers\library;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libreria\Book;
use App\Models\Libreria\Category;
use App\Models\Book_Category;



class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::orderby('id', 'asc')->get();
        $libros = Book::orderBy('id','ASC')->paginate(4);
        //$libros = Libro::orderBy('id','ASC')->paginate(5);
       // return view('library.Libros.index')->with('libros', $libros);
       return view('Library.Index')->with('libros',$libros)->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::orderby('id', 'asc')->get();
        return view('Library/NuevoLibro')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filePath='';
        $PDFPath='';
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/movi/imagesBooks/', $nombre);
            $filePath=$nombre;
            if($request->hasFile('PDF')){
                $PDF =  $request->file('PDF');
                $nombre2 = time().$PDF->getClientOriginalName();
                $PDFPath=$nombre2;
                $PDF->move(public_path().'/movi/BooksMovi/', $nombre2);
            }
        }
        
        //return $request;
        $libro = new Book();
        $libro->bookName=  $request->input('bookName');
        $libro->author= $request->input('author');
        $libro->publication_date= $request->input('publication_date');
        $libro->editorial= $request->input('editorial');
        $libro->synopsis= $request->input('synopsis');
        $libro->price= $request->input('price');
        $libro->PDF=  $PDFPath;
        $libro->image= $filePath;
        if($request->has('isBasic')){
            $libro->isBasicSubscription= false;
        }else{
            $libro->isBasicSubscription= true;
        }
        $categoria=$request->input('category');
        $Book_Category=new Book_Category();
        $Book_Category->idCategoria= $categoria;
        $id = Book::latest('id')->first();
        $idL= $id->id+1;
        $Book_Category->idArticulo=$idL;
        $Book_Category->isBook= true;
        $libro->save();
        $Book_Category->save();
        $categoriaL= Category::find($categoria);
        $request->session()->flash('alert-success', 'Libro guardado correctamente!');
        $Book=Book::find($idL);
        return view('Library/bookPage')->with('Book',$Book)
        ->with('categoria', $categoriaL);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Book=Book::find($id);
        $categoriaId=Book_Category::select('idCategoria')
        ->where('idArticulo', '=',$id)
        ->where('isBook', '=', 1)
        ->first();
        $categoria=Category::find($categoriaId)->first();
        return view('Library/bookPage')
            ->with('Book',$Book)
            ->with('categoria',$categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Category::orderby('id', 'asc')->get();
        $Book=Book::find($id);
        return view('Library/EditarLibro')->with('Book',$Book)->with('categorias',$categorias);
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
