<?php

namespace App\Http\Controllers\admin;

use App\Models\Libreria\Book;
use App\Models\Discount;
use App\Models\Libreria\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return "hola funcion listado";
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categorias = Category::orderby('id', 'asc')->get();
        return view('admin/Discounts/create')->with('categorias',$categorias);
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
        
        //return $request;
        $descuento = new Discount();
        $descuento->discountRate=  $request->input('porcentaje');
        $descuento->idCategory= $request->input('category');
        $descuento->startDate= $request->input('fechaInicio');
        $descuento->finishDate= $request->input('fechaFinal');

        $descuento->save();
        $request->session()->flash('alert-success', 'Nuevo Descuento Agregado!');
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
