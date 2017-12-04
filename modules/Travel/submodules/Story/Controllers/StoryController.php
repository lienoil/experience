<?php

namespace Story\Controllers;

use Frontier\Controllers\AdminController;
use Illuminate\Http\Request;
use Story\Models\Story;
use Story\Requests\StoryRequest;

class StoryController extends AdminController
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

        return view("Theme::stories.index");
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

        return view("Theme::stories.show");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("Theme::stories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Story\Requests\StoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryRequest $request)
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

        return view("Theme::stories.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Story\Requests\StoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoryRequest $request, $id)
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

        return redirect()->route('stories.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //

        return view("Theme::stories.trash");
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \Story\Requests\StoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(StoryRequest $request, $id)
    {
        //

        return back();
    }

    /**
     * Delete the specified resource from storage permanently.
     *
     * @param  \Story\Requests\StoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(StoryRequest $request, $id)
    {
        //

        return redirect()->route('stories.trash');
    }
}
