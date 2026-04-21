<?php

namespace App\Http\Controllers;

use App\Models\Jahitan;
use Illuminate\Http\Request;

class JahitanController extends Controller
{
    public function index()
    {
        $data = Jahitan::all();
        return view('jahitan.index', compact('data'));
    }

    public function create()
    {
        return view('jahitan.create');
    }

    public function store(Request $request)
    {
        Jahitan::create($request->all());
        return redirect('/jahitan');
    }

    public function edit($id)
    {
        $data = Jahitan::find($id);
        return view('jahitan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Jahitan::find($id)->update($request->all());
        return redirect('/jahitan');
    }

    public function destroy($id)
    {
        Jahitan::destroy($id);
        return redirect('/jahitan');
    }
}