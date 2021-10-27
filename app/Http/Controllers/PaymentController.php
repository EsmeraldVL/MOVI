<?php

namespace App\Http\Controllers;

use App\Models\Book_Category;
use App\Models\Libreria\Book;
use Illuminate\Http\Request;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $bookId= $request->input('idLibro');
        $book=Book::find($bookId);
        $categoria=Book_Category::select('categoria')
        ->whereColumn([
            ['idArticulo', '=',$bookId ],
            ['isBook', '=', '1'],
        ])->get();
        
        if ( is_null($categoria) ) {
            $categoria= Book_Category::select('categoria')
            ->whereColumn([
                ['idArticulo', '=',$bookId ],
                ['isBook', '=', '0'],
            ])
            ->get();
        }
        
        $discountRate=Book_Category::select('discountRate')
        ->where('idCategory', '=',$categoria )
        ->get();

        if ( is_null($categoria) ) {
            $discountRate=0;
        }
        return view('Payment/create')
            ->with('descuento',$discountRate)
            ->with('libro',$book);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
