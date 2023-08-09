<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChanLeHai;
use Illuminate\Http\Request;

class ChanLeHaiController extends Controller
{
    public function index()
    {
        $chanle = ChanLeHai::query()->get();

        return view('admin.chanlehai.index', compact('chanle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.chanlehai.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chanle = new ChanLeHai();
        $chanle->price_min = $request->get('price_min');
        $chanle->price_max = $request->get('price_max');
        $chanle->tile = $request->get('tile');

        $chanle->save();

        return redirect()->route('chan-le-hai');
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
        $chanle = ChanLeHai::query()->findOrFail($id);

        return view('admin.chanlehai.edit', compact('chanle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chanle = ChanLeHai::query()->findOrFail($id);
        $chanle->price_min = $request->get('price_min');
        $chanle->price_max = $request->get('price_max');
        $chanle->tile = $request->get('tile');

        $chanle->update();

        return redirect()->route('chan-le-hai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ChanLeHai::query()->where('id', $id)->delete();

        return redirect()->route('chan-le-hai');
    }
}
