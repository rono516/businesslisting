<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusinessRequest;
use App\Models\Business;
use App\Models\Category;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $businessCategories = Category::all();
        return view('business.business_create')->with([
            'businessCategories' => $businessCategories,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBusinessRequest $request)
    {
        $validated = $request->validated();

        $business = new Business($validated);

        $business->save();

        return redirect()->back()->with('success', 'Business created successfully!'); #need to redirect to my pending businesses to add more details
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
