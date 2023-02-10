<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class TransaksiController extends Controller
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
        $transaction = Transaction::create([
            'product_id'        => $request->productid,
            'user_id'           => Auth::user()->id,
            'customer_name'     => $request->customer_name,
            'qty'               => $request->qty,
            'status'            => 'Unpaid',
            'total_price'       => $request->totalprice
        ]);

        return redirect()->route('transaction.invoice')->with('success', 'Transaction successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice()
    {
        $transaction = Transaction::selectRaw('transactions.id, transactions.total_price, transactions.status, products.name, products.image')
        ->join('products', 'transactions.product_id', '=', 'products.id')
        ->where('transactions.user_id', Auth::user()->id)
        ->get();

        return view('landing.brunei.invoice', compact(['transaction']));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailinvoice($id)
    {
        $transaction = Transaction::find($id);
        $product = Product::find($transaction->product_id);

        return view('landing.brunei.detailinvoice', compact(['transaction', 'product']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('landing.brunei.transaction', compact(['product']));
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
        $file = $request->file('image');
        $filename = sprintf('%s_%s.%s', date('Y-m-d'), md5(microtime(true)), $file->extension());
        $image_path = $file->move('storage/invoice', $filename);

        Invoice::create([
            'transaction_id'    => $id,
            'file'              => $image_path
        ]);

        Transaction::where('id', $id)->update([
            'status'        => 'Waiting to be accepted'
        ]);

        return redirect()->route('transaction.invoice')->with('success', 'Detail invoice has been updated successfully!');
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
