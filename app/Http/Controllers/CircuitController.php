<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circuit;
class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ajoute_circuit');
    }
    public function list_circuits()
    {
        $cat=Circuit::select('categorie')->distinct()->get();
        $cir=Circuit::all();
        return view('circuit')->with(compact("cir","cat"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajoute_circuit');
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
            'categorie'=>'required',
            'prix' =>'required'
        ]);
        //upload image
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $cir=new Circuit;
        $cir->titre=$request->titre;
        $cir->image=$imageName;
        $cir->description=$request->description;
        $cir->categorie=$request->categorie;
        $cir->prix=$request->prix;
        $cir->save();
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
        $cir=Circuit::find($id)->get();
        return view("index")->with('des',$cir);
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
        $cir=Circuit::find($id);
        $cir->titre=$request->titre;
        $cir->description=$request->description;
        $cir->categorie=$request->categorie;
        $cir->prix=$request->prix;
        $cir->save();
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
        Circuit::find($id)->delete();
        return view("index");
    }
}
