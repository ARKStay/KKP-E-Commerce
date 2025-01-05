<?php

namespace App\Http\Controllers;

use App\Models\Sizes;
use Illuminate\Http\Request;

class DashboardSizesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sizes = Sizes::filter($request->only('search'))->get();
        return view('dashboard.sizes.index', ['title' => 'Size List', 'sizes' => $sizes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Sizes.create', [
            'title' => 'Add Size',
            'sizes' => Sizes::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:8|unique:sizes,name',
        ]);

        Sizes::create($validateData);

        return redirect('/dashboard/sizes')->with('Success', 'New size has been added!');
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
    public function edit(Sizes $size)
    {
        return view('dashboard.Sizes.edit', [
            'title' => 'Edit Size',
            'size' => $size,
            'sizes' => Sizes::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:20|unique:sizes,name,' . $id,
        ]);

        $size = Sizes::findOrFail($id);
        $size->update([
            'name' => $request->name,
        ]);

        return redirect('/dashboard/sizes')->with('Success2', 'Size updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sizes $size)
    {
        $size->delete();
        return redirect('/dashboard/sizes')->with('Success', 'Size has been deleted!');
    }
}
