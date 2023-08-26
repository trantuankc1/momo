<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MotPhanBaRequest;
use App\Models\MotPhanBa;
use Illuminate\Http\Request;

class MotPhanBaController extends Controller
{
    public function index()
    {
        $mpb = MotPhanBa::query()->get();

        return view('admin.motphanba.index', compact('mpb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.motphanba.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MotPhanBaRequest $request)
    {
        $motphanba = new MotPhanBa();
        $motphanba->price_min = $request->get('price_min');
        $motphanba->price_max = $request->get('price_max');
        $motphanba->tile = $request->get('tile');

        $motphanba->save();

        return redirect()->route('mot-phan-ba');
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
        $motphanba = MotPhanBa::query()->findOrFail($id);

        return view('admin.motphanba.edit', compact('motphanba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MotPhanBaRequest $request, string $id)
    {
        $motphanba = MotPhanBa::query()->find($id);
        $motphanba->price_min = $request->input('price_min');
        $motphanba->price_max = $request->input('price_max');
        $motphanba->tile = $request->input('tile');

        $motphanba->update();

        return redirect()->route('mot-phan-ba');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MotPhanBa::query()->where('id', $id)->delete();

        return redirect()->route('mot-phan-ba');
    }
}
