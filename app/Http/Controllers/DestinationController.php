<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ajoute_des');
    }
    public function list_destinations()
    {
        $des=Destination::all();
        return view('destination')->with("des",$des);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=> 'required',
            'image' => 'required',
            'location' => 'required',
            'offre'=>'required',
            'prix' =>'required'
        ]);
        //upload image
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $des=new Destination;
        $des->titre=$request->titre;
        $des->image=$imageName;
        $des->location=$request->location;
        $des->offre=$request->offre;
        $des->prix=$request->prix;
        $des->nb_vente=0;
        $des->save();
        return view("index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $des=Destination::find($id)->get();
        return view("index")->with('des',$des);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $des=Destination::find($id);
        $des->titre=$request->titre;
        $des->location=$request->location;
        $des->offre=$request->offre;
        $des->prix=$request->prix;
        $des->save();
        return view("index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Destination::find($id)->delete();
        return view("index");
    }
}
