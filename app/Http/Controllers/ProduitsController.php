<?php

namespace App\Http\Controllers;

use App\Models\Categorie_produits_habibe;
use App\Models\Produits_habibe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produits_habibe::orderBy('created_at','DESC')->get();
        return view('admin.produits.index', [
            'produits' => $produits
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoties = Categorie_produits_habibe::all();
        return view('admin.produits.create', [
            'categoties' => $categoties
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(request()->hasFile('imagePath')){
            $imagePath = '/storage/' . $request->imagePath->store('photos-produits', 'public');
        }

        $produits = Produits_habibe::create([
            'categorie_produits_habibe_id' => $request->categorie_id,
            'name'=>$request->name,
            'prix'=>$request->prix,
            'description'=>$request->description,
            'imagePath'=>$imagePath
        ]);
        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produits = Produits_habibe::findOrFail($id);
        $produits->name = $request->name;
        $produits->prix = $request->prix;
        $produits->description = $request->description;
        $produits->entreprise_id = $request->entreprise_id;
        if ($produits->save()) {
            return back()->with('success', 'modification avec success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produits = Produits_habibe::findOrFail($id);
        if ($produits->delete()) {
            return back()->with('success', 'suppression avec success');
        }
    }
}
