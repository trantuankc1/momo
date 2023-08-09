<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TaiXiu;
use Illuminate\Http\Request;

class TaiXiuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tx = TaiXiu::query()->get();

        return view('admin.taixiu.index', compact('tx'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.taixiu.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $taixiu = new TaiXiu();
        $taixiu->price_min = $request->get('price_min');
        $taixiu->price_max = $request->get('price_max');
        $taixiu->tile = $request->get('tile');

        $taixiu->save();

        return redirect()->route('tai-xiu');
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
        $taixiu = TaiXiu::query()->findOrFail($id);

        return view('admin.taixiu.edit', compact('taixiu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $taixiu = TaiXiu::query()->findOrFail($id);
        $taixiu->price_min = $request->get('price_min');
        $taixiu->price_max = $request->get('price_max');
        $taixiu->tile = $request->get('tile');

        $taixiu->update();

        return redirect()->route('tai-xiu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TaiXiu::query()->where('id', $id)->delete();

        return redirect()->route('tai-xiu');
    }
}
