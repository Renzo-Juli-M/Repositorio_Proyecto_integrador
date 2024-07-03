<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('offers.index', compact('offers'));
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $offer = new Offer();
        $offer->title = $request->title;
        $offer->description = $request->description;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $offer->image = $path;
        }

        $offer->save();

        return redirect()->route('offers.index')->with('success', 'Oferta creada exitosamente');
    }

    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('offers.edit', compact('offer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $offer = Offer::findOrFail($id);
        $offer->title = $request->title;
        $offer->description = $request->description;

        if ($request->hasFile('image')) {
            if ($offer->image) {
                Storage::disk('public')->delete($offer->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $offer->image = $path;
        }

        $offer->save();

        return redirect()->route('offers.index')->with('success', 'Oferta actualizada exitosamente');
    }

    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);

        if ($offer->image) {
            Storage::disk('public')->delete($offer->image);
        }

        $offer->delete();

        return redirect()->route('offers.index')->with('success', 'Oferta eliminada exitosamente');
    }
}
