<?php

namespace App\Http\Controllers;

use App\Models\ListIndividual;
use Illuminate\Http\Request;

class ListIndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listindividuals = ListIndividual::orderBy('created_at', 'DESC')->paginate(10);
        return view('pages.listIndividual', compact("listindividuals"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createIndividual');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validation du formulaire
        $request->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|max:255',
            'phone_number'=> 'required|max:10',
            'address' => 'required|max:255',
            'message'=> 'required|max:2000',
        ]);

        // save to the BDD
        ListIndividual::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'message' => $request->message,
            'created_at' =>now()
        ]);

        // redirect
        return redirect()->route('listindividuals.create')->with('status', "Merci d'avoir pris rendez vous, votre message a bien été enregistré, je vous contacte le plus rapidement possible, très belle journée à vous. Valérie");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListIndividual $listindividual)
    {
        return view('pages.showIndividual', compact('listindividual'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListIndividual $listindividual)
    {
        return view('pages.editIndividual', compact('listindividual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, ListIndividual $listindividual)
    {
         // validation
        $request->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|max:255',
            'phone_number'=> 'required|max:10',
            'address' => 'required|max:255',
            'message'=> 'required|max:2000',
        ]);

        //save to DB
        $listindividual->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'message' => $request->message,
            'created_at' =>now()
        ]);

        //redirect
        return redirect()->route('listindividuals.index')->with('status', 'La modification de ce contact a bien été appliquée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListIndividual $listindividual)
    {
        $listindividual->delete();
        return redirect()->route('listindividuals.index')->with('status','Le contact RDV individuel est bien supprimé!');
    }
}
