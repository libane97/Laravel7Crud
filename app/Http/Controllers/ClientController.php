<?php

namespace App\Http\Controllers;

use App\ClientModel;
use App\EntrepriseModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = ClientModel::status();
       return view('client.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ClientModel $client)
    {
        $entreprise = EntrepriseModel::all();
      //  $client = ClientModel::all();
        return view('client.Ajoute',compact('entreprise','client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'status' => 'required|Integer',
            'Telephone' => 'required|Integer',
            'Eid' => 'required|Integer'
        ]);
        ClientModel::create($data);
        return redirect()->route('client.index')->with('success', 'Client ajoute');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = ClientModel::where('id',$id)->FirstOrFail();
        //dd($client);
        return view('client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientModel $client)
    {
       $entreprise = EntrepriseModel::all();
      // $client = ClientModel::where('id',$id)->FirstOrFail();
       return view('client.edit',compact('client','entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ClientModel $id)
    {
        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'status' => 'required|Integer',
            'Telephone' => 'required|Integer',
            'Eid' => 'required|Integer'
        ]);
         //dd($data);
         $id->update($data);
       return redirect()->route('client.index')->with('success', 'Modifications sauvegarde');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientModel $id)
    {
        $id->delete();
        return redirect('/');
    }
}
