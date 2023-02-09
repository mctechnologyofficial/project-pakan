<?php

namespace App\Http\Controllers\Admin;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = Transaction::selectRaw('users.id, users.name as username, products.name as productname')
        ->join('users', 'users.id', '=', 'transactions.user_id')
        ->join('products', 'products.id', '=', 'transactions.product_id')
        ->where(function($query){
            $query->where('transactions.status', 'Paid')
            ->orWhere('transactions.status', 'Accepted');
        })
        ->get();

        // $transaksi =
        return view('dashboard.admin.report', compact(['report']));
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
        $file = $request->file('image');
        $filename = sprintf('%s_%s.%s', date('Y-m-d'), md5(microtime(true)), $file->extension());
        $image_path = $file->move('storage/report', $filename);

        Report::create([
            'user_id'       => $request->userid,
            'admin_name'    => Auth::user()->name,
            'image'         => $image_path
        ]);

        return redirect()->route('report.index')->with('success', 'Report has been submitted succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $report = Report::selectRaw('users.name, reports.*')
        ->join('users', 'users.id', '=', 'reports.user_id')
        ->get();

        return view('dashboard.admin.history', compact(['report']));
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
