<?php

namespace App\Http\Controllers;

use App\Models\daftarspk;
use App\Models\employee;
use App\Models\product;
use App\Models\spko;
use App\Models\spko_item;
// use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class ErpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = spko::with('pegawai')->get();
        return view('index', [
            'daftarspk' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employe = employee::get();
        $product = product::get();
        return view('create', [
            'employee' => $employe,
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'qty' => 'required|array',
            'qty.*' => 'required|int|min:0',
        ]);

        $data = spko::create([
            'employee' => $request->id_operatorspk,
            'trans_date' => Carbon::now(),
            'process' => $request->proses,
        ]);

        for ($i = 0; $i < count($request->produk); $i++) {
            spko_item::create([
                'oridnal' => $data->id,
                'id_product' => $request->produk[$i],
                'qty' => $request->qty[$i],
            ]);
        }

        return redirect('/')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\daftarspk  $daftarspk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $employe = employee::get();
        // $product = product::get();

        // $spko = spko::with('items')->where('id_spko', $id)->firstOrFail();

        // return view('edit', [
        //     'spko' => $spko,
        //     'employee' => $employe,
        //     'product' => $product
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\daftarspk  $daftarspk
     * @return \Illuminate\Http\Response
     */
    public function edit($id, spko $daftarspk)
    {
        // dd($id);
        // dd($daftarspk);
        $employe = employee::get();
        $product = product::get();

        $spko = spko::with('items')->where('id_spko', $id)->firstOrFail();

        return view('edit', [
            'spko' => $spko,
            'employee' => $employe,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\daftarspk  $daftarspk
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $spko = spko::with('product')->where('id_spko', $id);

        $spko->update([
            'employee' => $request->id_operatorspk,
            'trans_date' => Carbon::now(),
        ]);

        for ($i = 0; $i < count($request->produk); $i++) {
            $data[$request->produk[$i]] = [
                'qty' => $request->qty[$i]
            ];
        }
        $spko->first()->product()->sync($data);

        return redirect('/')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\daftarspk  $daftarspk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = spko::with('product')->where('id_spko', $id);

        $data->first()->items()->delete();

        $data->delete();

        return redirect('/')->with('success', 'Berhasil Menghapus Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\daftarspk  $daftarspk
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        $data = spko::with(['product', 'pegawai', 'items.product'])->where('id_spko', $id)->first();

        $pdf = PDF::loadview('print', ['data' => $data]);
        return $pdf->download('laporan-spko.pdf');
    }
}
