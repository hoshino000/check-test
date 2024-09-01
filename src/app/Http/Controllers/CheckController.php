<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showConfirm(Request $request)
    {
        $data = $request->only(['first_name', 'last_name', 'email']);
        return view('confirm', $data);
    }

    public function register(Request $request)
    {
        return redirect()->route('form')->with('success', '登録が完了しました。');
    }
}
