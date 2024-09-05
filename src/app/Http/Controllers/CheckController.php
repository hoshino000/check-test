<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(Request $request)
    {
        $data = $request->all();
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('form')->with('success', '登録が完了しました。');
    }

    public function register(Request $request)
    {
        Contact::create($request->all());
        return view('register', compact('users'));
    }
}