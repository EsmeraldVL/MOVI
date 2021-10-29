<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Models\Libreria\Book;
use App\Models\Subscription;
use App\Models\Subscription_Payment;
use App\Models\User;
use App\Models\User_Movis;
use App\Models\User_subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaySubscriptionController extends Controller
{

  /*  public function __construct(){
        $this->middleware('auth');
    }
*/

    public function create(Request $request)
    {
        $email=session()->get('email');
        $movis= User_Movis::select('amount')
        ->where('email', '=', $email)
        ->first();
        $movisUser=$movis->amount;
        $idSubscription=  $request->input('tipo');
        $Subscription=  $request->input('tipoId');
        $value= $request->input('precio');
        $priceMovis=Book::calcularPrecioMovis($value,1.7);


        return view('Subscription/Payment')
            ->with('idSubscription',$idSubscription)
            ->with('value',$value)
            ->with('precioMovis',$priceMovis)
            ->with('movisUser',$movisUser)
            ->with('Subscription',$Subscription)
            ;

    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email=session()->get('email');
        $user=User::find($email);
        $movis= User_Movis::select('amount')
        ->where('email', '=', $email)
        ->first();
        $movisUser=$movis->amount;
        $idPayment=$request->input('tipo');
        $tipoSubscripcion=$request->input('idTipo');
        $monto=$request->input('monto');

   
        $pagoSubscripcion=new Subscription_Payment();
        $pagoSubscripcion->email=$email;
        $pagoSubscripcion->idPayment=$idPayment;
        $pagoSubscripcion->idSuscription=$tipoSubscripcion;
        $pagoSubscripcion->paymentDate=Carbon::today()->toDateString();
        $pagoSubscripcion->amount=$monto;

        if($pagoSubscripcion->save()){
            if($idPayment==1){
                $movis= User_Movis::find($email);
                $movis->amount = $movisUser-$monto;
                $movis->save();
            }

            $subscripcion= User_Movis::select('id')
            ->where('email', '=', $email)
            ->latest();

            $subscripcionId=  $subscripcion->id;
            $subscripcion::find($subscripcionId);
            $subscripcion->idSubscription=$tipoSubscripcion;
            $subscripcion->save();
    
        }

        
       
        
        return view('Payment/create')
        ;
        
        $buy_Movis = new User_subscription();
        $buy_Movis->idSubscription= $request->input('tipo');
        $email= session()->get('email');
        $buy_Movis->email=$email;
        $buy_Movis->idPaymentType=$request->input('tipo_pago');
        $buy_Movis->detail='Pago de movis con tarjeta de credito #'.$request->input('numTarjeta')."con fecha exp:".$request->input('fechaExp');
        $buy_Movis->currency=$request->input('cambio');
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
