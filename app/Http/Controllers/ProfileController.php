<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [[
            'msv' => 'PH38429',
            'name' => 'Bùi Đức Ninh',
            'major' => 'WD',
            'home_town' => 'Hà Nội',
            'year_old' => '20',
            'avatar' => 'https://i.pinimg.com/736x/1b/d7/d4/1bd7d4a36b29622ed589633df3c00846.jpg'
        ]];
        return view('list-profile', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
