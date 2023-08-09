<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TaiXiuHai;
use Illuminate\Http\Request;

class TaiXiuHaiController extends Controller
{
    public function index()
    {
        $tx = TaiXiuHai::query()->get();

        return view('admin.taixiuhai.index', compact('tx'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.taixiuhai.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $taixiu = new TaiXiuHai();
        $taixiu->price_min = $request->get('price_min');
        $taixiu->price_max = $request->get('price_max');
        $taixiu->tile = $request->get('tile');

        $taixiu->save();

        return redirect()->route('tai-xiu-hai');
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
        $taixiu = TaiXiuHai::query()->findOrFail($id);

        return view('admin.taixiuhai.edit', compact('taixiu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $taixiu = TaiXiuHai::query()->findOrFail($id);
        $taixiu->price_min = $request->get('price_min');
        $taixiu->price_max = $request->get('price_max');
        $taixiu->tile = $request->get('tile');

        $taixiu->update();

        return redirect()->route('tai-xiu-hai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TaiXiuHai::query()->where('id', $id)->delete();

        return redirect()->route('tai-xiu-hai');
    }
}
