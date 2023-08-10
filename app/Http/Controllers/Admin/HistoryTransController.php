<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryTrans;
use Illuminate\Http\Request;

class HistoryTransController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bill = HistoryTrans::query()->get();

        return view('admin.history.index', compact('bill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

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
        $bill = HistoryTrans::query()->where('id', $id)->first();
        $bill->status = $request->get('status');

        $bill->update();

        return redirect()->route('history.game');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
