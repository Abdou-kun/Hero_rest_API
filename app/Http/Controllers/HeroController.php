<?php

namespace App\Http\Controllers;

use App\Http\Resources\HeroResource;
use App\Models\Hero;
use App\Http\Requests\HeroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HeroResource::collection(Hero::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeroRequest $request)
    {
        $hero = Hero::create([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'strength' => $request->input('strength'),
            'speed' => $request->input('speed'),
            'intelligence' => $request->input('intelligence')
        ]);

        return new HeroResource($hero);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return new HeroResource($hero);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HeroRequest $request, Hero $hero)
    {
        $hero->update([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'strenght' => $request->input('strenght'),
            'speed' => $request->input('speed'),
            'intelligence' => $request->input('intelligence')
        ]);

        return new HeroResource($hero);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();

        return response(null, 204);
    }
}
