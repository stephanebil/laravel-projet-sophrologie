<?php

namespace App\Http\Controllers;

use App\Models\ListGroup;
use Illuminate\Http\Request;

class ListGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listgroups = ListGroup::orderBy('created_at', 'DESC')->paginate(10);
        return view('pages.group.listGroup', compact("listgroups"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.group.createGroup');
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
        ListGroup::create([
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
    public function show(ListGroup $listgroup)
    {
        return view('pages.group.showGroup', compact('listgroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListGroup $listgroup)
    {
        return view('pages.group.editGroup', compact('listgroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListGroup $listgroup)
    {
        $validated = 0;
        if($request->has('is_validated')){
            $validated=1;
        }
        
        
        // validation
        $request->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|max:255',
            'phone_number'=> 'required|max:10',
            'address' => 'required|max:255',
            'message'=> 'required|max:2000',
        ]);

        //save to DB
        $listgroup->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'message' => $request->message,
            'is_validated' => $validated,
            'updated_at'=> now()
        ]);

        //redirect
        return redirect()->route('listgroups.index')->with('status', 'La modification de ce contact a bien été appliquée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListGroup $listgroup)
    {
        $listgroup->delete();
        return redirect()->route('listgroups.index')->with('status','Le contact RDV en groupe est bien supprimé!');
    }
}
