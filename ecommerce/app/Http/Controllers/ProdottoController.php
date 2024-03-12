<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodotto;

class ProdottoController extends Controller
{
    public function index()
    {
        $prodotti = Prodotto::all();
        return view('prodotti.index', compact('prodotti'));
    }

    public function create()
    {
        return view('prodotti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomeprodotto' => 'required',
            'costo' => 'required|numeric',
            'descrizione' => 'required',
            'prezzo' => 'required|numeric',
        ]);

        $prodotto = Prodotto::create($request->all());

        return redirect('/prodotti')->with('success', 'Prodotto creato con successo');
    }

    public function show($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        return view('prodotti.show', compact('prodotto'));
    }

    public function edit($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        return view('prodotti.edit', compact('prodotto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomeprodotto' => 'required',
            'costo' => 'required|numeric',
            'descrizione' => 'required',
            'prezzo' => 'required|numeric',
        ]);

        $prodotto = Prodotto::findOrFail($id);
        $prodotto->update($request->all());

        return redirect('/prodotti')->with('success', 'Prodotto aggiornato con successo');
    }

    public function destroy($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        $prodotto->delete();

        return redirect('/prodotti')->with('success', 'Prodotto eliminato con successo');
    }
}