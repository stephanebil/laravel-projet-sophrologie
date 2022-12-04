<?php

namespace App\Http\Controllers;

use App\Models\ListContact;
use Illuminate\Http\Request;

class ListContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcontacts = ListContact::orderBy('created_at', 'DESC')->paginate(10);
        
        return view('pages.contact.listContact', compact("listcontacts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact.createContact');
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
            'message'=>'required|max:2000',
        ]);

        // save to the BDD
        ListContact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' =>now()
        ]);

        // redirect
        return redirect()->route('listcontacts.create')->with('status', "Merci de m'avoir contactée, votre message a bien été enregistré");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListContact $listcontact)
    {
        return view('pages.contact.showContact', compact('listcontact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListContact $listcontact)
    {
        return view('pages.contact.editContact', compact('listcontact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListContact $listcontact)
    {
        // creation variable $validated defaut 0
        $validated = 0;
        // vérification si le user a cliqué dur valider  
        if($request->has('is_validated')){
            $validated=1;
        }
        
        // validation
        $request->validate([
            'name'=> 'required|max:255|string',
            'email'=> 'required|max:255|string',
            'message' => 'required|max:2000',
        ]);

        //save to DB
        $listcontact->update([
            'name'=>$request->name,
            'email' =>$request->email,
            'message' =>$request->message,
            'is_validated' => $validated,
            'updated_at'=> now()
        ]);

        //redirect
        return redirect()->route('listcontacts.index')->with('status', 'La modification de ce contact a bien été appliquée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListContact $listcontact)
    {
        $listcontact->delete();
        return redirect()->route('listcontacts.index')->with('status','Le contact est bien supprimé!');
    }
}
