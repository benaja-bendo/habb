<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PointVenteRessource;
use App\Models\PointVente;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PointVenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        return PointVenteRessource::collection(PointVente::orderby('created_at','DESC')->get())->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request()->hasFile('image_path')) {
            $image_path = '/storage/' . $request->image_path->store('images_pv', 'public');
        }else{
            $image_path = 'https://ui-avatars.com/api/?name='.$request->name;
        }
        $point_vente = PointVente::create([
           'name'=>$request->name,
           'commercial_id'=>$request->commercial_id,
           'imagePath'=>$image_path,
           'quartier'=>$request->quartier,
           'ville'=>$request->ville,
           'telephone'=>$request->telephone,
        ]);
        return response([
            'message'=>'creation avec success'
        ],Response::HTTP_ACCEPTED);
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
