<?php

namespace App\Http\Controllers;

use App\Models\propertie;
use App\Models\propertiesimage;
use Illuminate\Http\Request;

class imagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('properties.image');
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
    //dd($request->all());
    // Validate the request data if needed
    $request->validate([
        'property_id' => 'required',
        'image' => 'required', // Add appropriate validation rules
        'status' => 'required',
    ]);

   

   
            // Create a new record in the 'properties_images' table
            PropertiesImage::create([
                'property_id' => $request->input('property_id'),
                'image' => $request->input('image'),
                'status' => $request->input('status'),
            ]);

            return redirect()->route('prop.image');
    
}

// public function store(Request $request)
// {
//     // Validate the request data
//     $request->validate([
//         'property_id' => 'required',
//         'image' => 'required|image', // Adjust image validation rules
//         'status' => 'required|in:Married,Unmarried', // Adjust status validation rules
//     ]);

//     // Ensure that the authenticated user is allowed to create a record
//     // You can add your authorization logic here.

//     // Handle file upload and store it securely
//     $imagePath = $request->file('image')->store('images', 'public'); // Store uploaded image in the 'public/images' directory

//     // Create a new record in the 'properties_images' table
//     PropertiesImage::create([
//         'property_id' => $request->input('property_id'),
//         'image' => $imagePath, // Save the file path in the database
//         'status' => $request->input('status'),
//     ]);

//     return redirect()->route('prop.image')->with('success', 'Image uploaded successfully.');
// }



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
