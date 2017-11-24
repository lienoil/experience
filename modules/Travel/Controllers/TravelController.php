<?php

namespace Travel\Controllers;

use Frontier\Controllers\AdminController;
use Illuminate\Http\Request;
use Travel\Models\Travel;
use Travel\Requests\TravelRequest;

class TravelController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        return view("Theme::travels.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //

        return view("Theme::travels.show");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("Theme::travels.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Travel\Requests\TravelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelRequest $request)
    {
        //

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //

        return view("Theme::travels.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Travel\Requests\TravelRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelRequest $request, $id)
    {
        //

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //

        return redirect()->route('travels.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //

        return view("Theme::travels.trash");
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \Travel\Requests\TravelRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(TravelRequest $request, $id)
    {
        //

        return back();
    }

    /**
     * Delete the specified resource from storage permanently.
     *
     * @param  \Travel\Requests\TravelRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(TravelRequest $request, $id)
    {
        //

        return redirect()->route('travels.trash');
    }
}
