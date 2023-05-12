<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SpaceStation;
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
        return view('space_stations.create');
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

    public function show(SpaceStation $spaceStation)
    {
        return view('space_stations.show', compact('spaceStation'));
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
