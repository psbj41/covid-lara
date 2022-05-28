<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function index()
    {
        $blood = Blood::all();
        return view('backend.pages.blood.index',compact('blood'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blood = new Blood();
        $blood->name = $request->name;
        $blood->save();

        return redirect()->route('blood.index')->with('success', "Blood Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $blood
     * @return \Illuminate\Http\Response
     */
    public function edit(Blood $blood)
    {
        return view('backend.pages.blood.edit',compact('blood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $blood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blood $blood)
    {
        $blood->status = $request->status;
        $blood->save();

        return redirect()->route('blood.index')->with('success', "Blood Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $blood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blood $blood)
    {
        $blood->delete();
        return redirect()->route('blood.index')->with('success', "Blood Deleted Successfully");

    }


    public function store2(Request $request)
    {
        $blood = Blood::create($request->all());
        return redirect()->route('blood')->with('success','Blood Submitted');
    }
}
