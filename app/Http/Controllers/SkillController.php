<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Skill;
use Illuminate\Http\Request;
use Spatie\FlareClient\Api;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        $skill=new Skill();
        $skill->otherSkills=$request->otherSkills;
        $skill->language=$request->language;
        $skill->year=$request->year;
        $skill->save();
        return ApiResponse::success($skill,200,'skills created');
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
    public function destroy(string $id)
    {
        //
    }
}
