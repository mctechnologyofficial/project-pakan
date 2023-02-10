<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndoTransaksiController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
        // $transaction = Transaction::selectRaw('products.id, transactions.total_price, transactions.status, products.name, products.image')->where('user_id', Auth::user()->id)
        // ->join('products', 'transactions.product_id', '=', 'products.id')
        // ->get();

        $transaksi = Transaction::create([
            'product_id'        => $request->productid,
            'user_id'           => Auth::user()->id,
            'customer_name'     => $request->customer_name,
            'qty'               => $request->qty,
            'status'            => 'Unpaid',
            'total_price'       => $request->totalprice
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id'      => $transaksi->id,
                'product_id'    => $request->productid,
                'user_id'       => Auth::user()->id,
                'gross_amount'  => $transaksi->total_price,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->id,
                'phone' => Auth::user()->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        Session::put('snapToken', $snapToken);

        return redirect()->route('invoice-indo', $transaksi->id);
    }

    // public function invoice($id)
    // {
    //     $transaksi = Transaction::find($id);
    //     $product = Product::find($transaksi->product_id);
    //     return view('landing.indo.invoice', compact(['transaksi', 'product']));
    // }

    public function invoice($id)
    {
        $transaksi = Transaction::find($id);
        $productIndo = Product::find($transaksi->product_id);
        return view('landing.indo.invoice', compact(['transaksi', 'productIndo']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productIndo = Product::find($id);
        return view('landing.indo.transaction', compact(['productIndo']));
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
