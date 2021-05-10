<?php

namespace App\Http\Controllers;

use App\Models\Commercial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;

class CommercialController extends Controller
{
    public function index(){
        $commercials = Commercial::all();
        // dd($commercials);
        return view('admin.commerciaux.index',[
            'commercials'=>$commercials
        ]);
    }

    public function add_commercial(){
        return view('admin.commerciaux.add');
    }

    public function store(Request $request){
        
       
        if($request->imagePath == null){
            $imagePath='/assets/media/users/blank.png';
        }else{
            // if (request()->hasFile('imagePath')) {
                $imagePath = '/storage/' . $request->imagePath->store('photos-commercial', 'public');
            // }
        }

        $commercial = Commercial::create([
            'prenom' => $request->prenom,
            'name' => $request->nom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'genre' => $request->genre,
            'imagePath' => $imagePath,
            'password' => Hash::make('password'),
            
        ]);
        return back()->with('success', 'creation avec success');
    }


    public function show($id){
        $commercial = Commercial::find($id);
        return view('admin.commerciaux.show',[
            'commercial'=>$commercial
        ]);
    }

    public function edit($id){
        $commercial = Commercial::find($id);
        return view('admin.commerciaux.edit', [
            'commercial' => $commercial
        ]);
    }

    public function update(Request $request,$id){

        $commercial = Commercial::find($id);
        if($request->imagePath == null){
            $imagePath=$commercial->imagePath;
        }else{
            // if (request()->hasFile('imagePath')) {
            $imagePath = '/storage/' . $request->imagePath->store('photos-commercial', 'public');
            // }
        }
        $commercial->name = $request->nom;
        $commercial->prenom = $request->prenom;
        $commercial->telephone = $request->telephone;
        $commercial->email = $request->email;
        $commercial->adresse = $request->adresse;
        $commercial->genre = $request->genre;
        if ($commercial->save()){
            return redirect()->route('commerciaux.index');
        }
    }
}
