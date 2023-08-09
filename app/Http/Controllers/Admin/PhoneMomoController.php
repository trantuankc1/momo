<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NumberPhoneMomo;
use Illuminate\Http\Request;

class PhoneMomoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = NumberPhoneMomo::query()->get();

        return view('admin.phonemomo.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.phonemomo.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $phone = new NumberPhoneMomo();

        $phone->sdt = $request->get('sdt');
        $phone->status = $request->get('status');
        $phone->soluot = $request->get('soluot');
        $phone->name = $request->get('name');

        $phone->save();

        return redirect()->route('list-phone');
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
        $phone = NumberPhoneMomo::query()->findOrFail($id);

        return view('admin.phonemomo.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $phone = NumberPhoneMomo::query()->find($id);
        $phone->sdt = $request->get('sdt');
        $phone->status = $request->get('status');
        $phone->soluot = $request->get('soluot');
        $phone->name = $request->get('name');

        $phone->update();

        return redirect()->route('list-phone');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        NumberPhoneMomo::query()->where('id', $id)->delete();

        return redirect()->route('list-phone');
    }
}
