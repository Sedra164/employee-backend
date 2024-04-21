<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section=Section::all();
        return response()->json(['success'=>true,'data'=>$section],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $section=new Section();
        $section->name=$request->name;
        $section->save();
        return response()->json(['success'=>true,'message'=>'section created','data'=>$section],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {

        $section->delete();
        return response()->json(['success'=>true,'message'=>'section deleted','data'=>null],200);
    }
}
