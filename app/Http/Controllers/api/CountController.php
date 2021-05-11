<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PointVente;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CountController extends Controller
{
    public function index($id){
        $count_pv = count(PointVente::where('commercial_id',$id)->get());

        return response([
            'nbr_pv'=>$count_pv
        ],Response::HTTP_ACCEPTED);
    }
}
