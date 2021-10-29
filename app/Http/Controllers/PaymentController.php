<?php

namespace App\Http\Controllers;

use App\Models\Discount as ModelsDiscount;
use App\Models\discount;
use App\Models\User;
use App\Models\User_Movis;
use App\Models\Libreria\Book;
use App\Models\Libreria\Category;
use Illuminate\Http\Request;



class PaymentController extends Controller
{

    public function __construct(){
       $this->middleware('auth');
    }

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
        $email=session()->get('email');
        $user=User::find($email);
        $movis= User_Movis::select('amount')
        ->where('email', '=', $email)
        ->first();
        $movisUser=$movis->amount;
        if ($request->input('isLibro')) {

            $bookId = $request->input('Libro');
            $categoriaId = $request->input('category');
            $book=Book::find($bookId);
            $categoria=Category::find($categoriaId);
            $discountRate = ModelsDiscount::select('discountRate')
                ->where('idCategory', '=', $categoria->id)
                ->first();
            if (is_null($categoria)) {
                $discountRate = 0;
            }
            $bookPrice= $book->price;
            $totalDesc= discount::CalcularDescuento($bookPrice,$discountRate);
            $priceMovis=Book::calcularPrecioMovis($bookPrice,1.7);
            $priceMovisF=discount::CalcularDescuento($priceMovis,20);
   
            return view('Payment/create')
                ->with('user',$user)
                ->with('libro', $book)
                ->with('categoria',$categoria)
                ->with('descuento', $discountRate)
                ->with('movisUser',$movis->amount)

                ->with('totalQ',$book->price)
                ->with('totalDQ',$totalDesc)
                ->with('totalMovis',$priceMovis)
                ->with('totalModisDesc',$priceMovisF)
                ->with('movisUser',$movisUser);
        } else if (!$request->input('isLibro')) {
            # code...
        } else {
        }
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
