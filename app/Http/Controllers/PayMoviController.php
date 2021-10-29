<?php

namespace App\Http\Controllers;

use App\Models\Buy_Movis;
use App\Models\Currency;
use App\Models\User_Movis;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PayMoviController extends Controller
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
    public function create()
    {
        $movisId= Currency::latest('id')->first();
        $movisValue= Currency::find($movisId);
        return view('Payment/Movis/create')
            ->with('movisValue',$movisValue);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buy_Movis = new Buy_Movis();
        $buy_Movis->dateF=Carbon::today()->toDateString();
        $buy_Movis->amount= $request->input('aPagar');
        $email= session()->get('email');
        $buy_Movis->email=$email;
        $buy_Movis->idPaymentType=$request->input('tipo_pago');
        $buy_Movis->detail='Pago de movis con tarjeta de credito #'.$request->input('numTarjeta')."con fecha exp:".$request->input('fechaExp');
        $buy_Movis->currency=$request->input('cambio');
        
        if($buy_Movis->save()) {
            $movisAumento=$request->input('movis');
            $email=session()->get('email');
            $movisUsrer= User_Movis::select('amount')
            ->where('email', '=', $email)
            ->first();
            $movisUserF=$movisUsrer->amount;
            $movis= User_Movis::find($email);
            $movis->amount = $movisUserF+$movisAumento;
            $movis->save();
            $request->session()->flash('message','Se ha registrado su compra');
        } else {
            $request->session()->flash('message','No se  ha registrado su compra');
        }
        return redirect('/home');
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
