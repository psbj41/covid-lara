<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appoint;
use Illuminate\Http\Request;

class AppointController extends Controller
{
    public function index()
    {
        $appoint = Appoint::all();
        return view('backend.pages.appoint.index',compact('appoint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.appoint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appoint = new Appoint();
        $appoint->name = $request->name;
        $appoint->save();

        return redirect()->route('appoint.index')->with('success', "Appoint Created Successfully");
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
     * @param  int  $appoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoint $appoint)
    {
        return view('backend.pages.appoint.edit',compact('appoint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $appoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoint $appoint)
    {
        $appoint->status = $request->status;
        $appoint->save();

        return redirect()->route('appoint.index')->with('success', "Appoint Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $appoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoint $appoint)
    {
        $appoint->delete();
        return redirect()->route('appoint.index')->with('success', "Appoint Deleted Successfully");

    }


    public function store2(Request $request)
    {
        $appoint = Appoint::create($request->all());
        return redirect()->route('appointment')->with('success','Appointment Submitted');
    }
}
