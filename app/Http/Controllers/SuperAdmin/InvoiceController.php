<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Transaction;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = Invoice::selectRaw('invoices.*, transactions.status')
        ->join('transactions', 'transactions.id', '=', 'invoices.transaction_id')
        ->get();

        return view('dashboard.super-admin.validate-transaction.list', compact(['invoice']));
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
        $payment = Invoice::find($id);

        return view('dashboard.super-admin.validate-transaction.detail', compact(['payment']));
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
        $invoice = Invoice::find($id);

        if (isset($_POST['btnaccept'])) {
            $transaction = Transaction::where('id', $invoice->transaction_id)->update([
                'status'    => 'Accepted',
            ]);

            return redirect()->route('superadmin.proofpayment.index');
        } else {
            $transaction = Transaction::where('id', $invoice->transaction_id)->update([
                'status'    => 'Rejected',
            ]);

            return redirect()->route('superadmin.proofpayment.index');
        }
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
