<?php

namespace Experience\Controllers;

use Frontier\Controllers\AdminController;
use Illuminate\Http\Request;
use Experience\Models\Experience;
use Experience\Requests\ExperienceRequest;

class ExperienceController extends AdminController
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

        return view("Theme::experiences.index");
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

        return view("Theme::experiences.show");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("Theme::experiences.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Experience\Requests\ExperienceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienceRequest $request)
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

        return view("Theme::experiences.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Experience\Requests\ExperienceRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienceRequest $request, $id)
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

        return redirect()->route('experiences.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //

        return view("Theme::experiences.trash");
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \Experience\Requests\ExperienceRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(ExperienceRequest $request, $id)
    {
        //

        return back();
    }

    /**
     * Delete the specified resource from storage permanently.
     *
     * @param  \Experience\Requests\ExperienceRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(ExperienceRequest $request, $id)
    {
        //

        return redirect()->route('experiences.trash');
    }
}
