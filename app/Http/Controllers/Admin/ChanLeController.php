<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChanLeRequest;
use App\Models\ChanLe;
use App\Models\HistoryTrans;
use Illuminate\Http\Request;

class ChanLeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $chanle = ChanLe::query()->get();

        return view('admin.chanle.index', compact('chanle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.chanle.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChanLeRequest $request)
    {
        $chanle = new ChanLe();
        $chanle->price_min = $request->get('price_min');
        $chanle->price_max = $request->get('price_max');
        $chanle->tile = $request->get('tile');

        $chanle->save();

        return redirect()->route('chan-le');
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
        $chanle = ChanLe::query()->findOrFail($id);

        return view('admin.chanle.edit', compact('chanle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChanLeRequest $request, string $id)
    {
        $chanle = ChanLe::query()->findOrFail($id);
        $chanle->price_min = $request->get('price_min');
        $chanle->price_max = $request->get('price_max');
        $chanle->tile = $request->get('tile');

        $chanle->update();

        return redirect()->route('chan-le');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ChanLe::query()->where('id', $id)->delete();

        return redirect()->route('chan-le');
    }
}
