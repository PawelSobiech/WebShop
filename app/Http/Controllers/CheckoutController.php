<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $query = "select * from items where ilosc > 0; ";
         $items = DB::select($query);
         return view('checkout', ['items' => $items]);
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
    public function store(Request $request, $wartosc)
    {
        //
        $this->validate($request, [
            'nazwisko' => 'required|string',
            'kraj' => 'required|string',
            'miasto' => 'required|string',
            'ulica' => 'required|string',
            'nr_budynku' => 'required|integer',
            'kod_pocztowy' => 'required|integer',
            'nr_telefonu' => 'required|integer',
        ]);
        $order = new Order();
        $order->nazwisko = $request->nazwisko;
        $order->kraj = $request->kraj;
        $order->miasto = $request->miasto;
        $order->ulica = $request->ulica;
        $order->nr_budynku = $request->nr_budynku;
        $order->nr_mieszkania = $request->nr_mieszkania;
        $order->kod_pocztowy = $request->kod_pocztowy;
        $order->nr_telefonu = $request->nr_telefonu;
        if ($request->platnosci == 'przelew') 
        {
            $order->platnosc = 'Przelew';
        } 
        elseif ($request->platnosci == 'blik') 
        {
            $order->platnosc = 'Blik';
        } 
        elseif ($request->platnosci == 'paypal') 
        {
            $order->platnosc = 'Paypal';
        } 
        else 
        {
            $order->platnosc = "Gotowka";
        }

        $order->wartosc = $wartosc;
        if (Auth::check() == false) {
            $order->imie = $request->imie;
            $order->email = $request->email;
        }
        else
        {
            $order->imie = Auth::getUser()->name;
            $order->email = Auth::getUser()->email;
        }


        if($order->save())
        {
            return redirect('checkout')->with('Dodano zamowienie');
        }
        else
        {
            return redirect('checkout')->with('Nie dodano zamowienia');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
