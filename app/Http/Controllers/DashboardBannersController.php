<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.banners.index', ['title' => 'Banners', 'banners' => Banner::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Banners.create', [
            'title' => 'Add Banner'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:30720',
            'status' => 'required|string|max:3',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('product-banners');
        }

        Banner::create($validatedData);

        return redirect('/dashboard/banners')->with('Success', 'New banner has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('dashboard.Banners.show', [
            'banner' => $banner,
            'title' => 'Banner'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('dashboard.Banners.edit', [
            'title' => 'Edit Banner',
            'banner' => $banner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $rules = [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30720',
            'status' => 'required|string|max:3',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('product-banners');
        }

        $banner->update($validatedData);

        return redirect('/dashboard/banners')->with('Success2', 'Banner updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::delete($banner->image);
        }
        $banner->delete();
        return redirect('/dashboard/banners')->with('Success', 'Banner has been deleted!');
    }
}
