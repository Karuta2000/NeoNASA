<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SpaceStation;
use App\Models\Galaxy;
use Illuminate\Http\Request;

class SpaceStationController extends Controller
{
    public function index()
    {
        $space_stations = SpaceStation::all();
        return view('space_stations.index', compact('space_stations'));
    }

    public function create()
    {
        $galaxies = Galaxy::all();
        return view('space_stations.create', compact('galaxies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gps_3d_coordinates' => 'required',
            'image_url' => 'required',
            'galaxy_id' => 'required',
        ]);

        SpaceStation::create($request->all());

        return redirect()->route('space_stations.index')
                         ->with('success', 'Space Station created successfully.');
    }

    public function show(SpaceStation $space_station)
    {
        return view('space_stations.show', compact('space_station'));
    }

    public function edit(SpaceStation $spaceStation)
    {
        return view('space_stations.edit', compact('spaceStation'));
    }

    public function update(Request $request, SpaceStation $spaceStation)
    {
        $request->validate([
            'name' => 'required',
            'gps_3d_coordinates' => 'required',
            'image_url' => 'required',
            'galaxy_id' => 'required',
        ]);

        $spaceStation->update($request->all());

        return redirect()->route('space_stations.index')
                         ->with('success', 'Space Station updated successfully.');
    }

    public function destroy(SpaceStation $spaceStation)
    {
        $spaceStation->delete();
        return redirect()->route('space_stations.index')
                         ->with('success', 'Space Station deleted successfully.');
    }
}
