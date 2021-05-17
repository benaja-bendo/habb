<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\DetailVente;
use App\Models\Ventes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allvente = count(Ventes::all());
        $total_prix = 0;
        $vente = Ventes::create([
            'commercial_id'=>$request->commercial_id,
            'Num_vente'=>"Num_". ((int)$allvente + 1),
            'prix_total'=>$total_prix,
        ]);

        $detail_vente = DetailVente::create([
            'vente_id'=>$vente->id,
            'produits_habibe_id'=>$request->produits_habibe_id,
            'point_vente_id'=>$request->point_vente_id,
            'qte'=>$request->qte,
            'prix_vendu'=>$request->prix_vendu,
        ]);

        return response()->json([
            'message'=>'creation avec succes'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
