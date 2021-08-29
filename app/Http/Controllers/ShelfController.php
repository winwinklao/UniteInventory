<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use App\Models\Shelf;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = [
        //     "shelves" => Shelf::all(),
        // ];

        $shelves = Shelf::all();

        return view('product.shelf.index',compact('shelves'));
        //return view('shelf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shelf = new Shelf();
        $shelf -> shelf_capacity = 100;
        $shelf->save();

        
        for($i=1;$i<=4;$i++){
            $rack = new Rack();
            $rack->title = $i;
            $rack->capacity = 100;
            $rack->id_shelf=$shelf->id;
            $rack->save(); 
        }
        

        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shelf = Shelf::findOrFail($id);
        $racks = Rack::all();
        $area = 0;
        $usearea = 0; 
        
        foreach($racks as $rack){
            if($rack->id_shelf == $shelf->id){
                $usearea += $rack->capacity; 
            }
        }

        return view('product.shelf.inshelf.index',compact('shelf') );
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
        $racks=Rack::all();
        foreach($racks as $rack){
            if($rack->id_shelf == $id){
                Rack::destroy($rack->id);
            }
        }
        Shelf::destroy($id);
        return back();

    }
}
