<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PayQrRequest;
use App\Models\PayQR;
use Illuminate\Http\Request;

class PayQRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payqr = PayQR::query()->get();

        return view('admin.payqr.index', compact('payqr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payqr.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PayQrRequest $request)
    {
        $qr = new PayQR();
        $qr->image_qr = $request->file('image_qr')->store('public');
        $qr->sdt = $request->get('sdt');

        $qr->save();

        return redirect()->route('pay-qr');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PayQR::query()->where('id', $id)->delete();

        return redirect()->route('pay-qr');
    }
}
