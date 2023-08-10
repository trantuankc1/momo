<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Telegram;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function index()
    {
        $telegram = Telegram::query()->get();

        return view('admin.telegram.index', compact('telegram'));
    }

    public function destroy($id)
    {
        Telegram::query()->where('id', $id)->delete();

        return redirect()->route('index.telegram');
    }

    public function create()
    {
        return view('admin.telegram.add');
    }

    public function store(Request $request)
    {
        $telegram = new Telegram();
        $telegram->link = $request->input('link');

        $telegram->save();

        return redirect()->route('index.telegram');
    }
}
