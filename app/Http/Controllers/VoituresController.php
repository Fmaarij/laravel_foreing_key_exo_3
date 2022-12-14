<?php

namespace App\Http\Controllers;

use App\Models\Voitures;
use App\Http\Requests\StoreVoituresRequest;
use App\Http\Requests\UpdateVoituresRequest;
use App\Models\Couleur;
use Illuminate\Http\Request;

class VoituresController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $cars = Voitures::all();
        $colors = Couleur::all();
        return view( 'pages.voitures.index', compact( 'cars', 'colors' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {

        return view( 'pages.voitures.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreVoituresRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $colors = new Couleur;
        $colors->couleur = $request->couleur;
        $colors->save();
        // $colors->couleur = $request->$cars->id;

        $cars = new Voitures;
        $cars->marque = $request->marque;
        $cars->annee = $request->annee;
        $cars->couleur_id = $colors->id;
        $cars->save();

        return redirect()->back();

    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Voitures  $voitures
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $cars = Voitures::find( $id );
        return view( 'pages.voitures.show', compact( 'cars' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Voitures  $voitures
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $cars = Voitures::find( $id );
        return view( 'pages.voitures.edit', compact( 'cars' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateVoituresRequest  $request
    * @param  \App\Models\Voitures  $voitures
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {

        $colors = Couleur::find( $id );
        $colors->couleur = $request->couleur;
        $colors->save();

        $cars = Voitures::find( $id );
        $cars->marque = $request->marque;
        $cars->annee = $request->annee;
        $cars->couleur_id = $colors->id;
        $cars->save();

        return redirect( '/' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Voitures  $voitures
    * @return \Illuminate\Http\Response
    */

    public function destroy( Request $request, $id ) {
        $cars = Voitures::find( $id );
        $cars->couleur()->delete();
        return redirect( '/' );

    }
}
