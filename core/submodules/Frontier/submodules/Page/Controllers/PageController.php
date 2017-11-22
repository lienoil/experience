<?php

namespace Page\Controllers;

use Frontier\Controllers\AdminController;
use Illuminate\Http\Request;
use Page\Models\Page;
use Page\Requests\PageRequest;

class PageController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resources = Page::paginate();
        $trashed = Page::onlyTrashed()->count();

        return view("Theme::pages.index")->with(compact('resources', 'trashed'));
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
        $resource = Page::findOrFail($id);

        return view("Theme::pages.show")->with(compact('resource'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Theme::pages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Page\Requests\PageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $page = new Page();
        $page->name = $request->input('name');
        $page->code = $request->input('code');
        $page->description = $request->input('description');
        if (null !== $request->input('schedule')) {
            $page->schedule = date('Y-m-d H:i:s', strtotime($request->input('schedule')));
        }
        $page->save();

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
        $resource = Page::findOrFail($id);

        return view("Theme::pages.edit")->with(compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Page\Requests\PageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->name = $request->input('name');
        $page->code = $request->input('code');
        $page->description = $request->input('description');
        if (null !== $request->input('schedule')) {
            $page->schedule = date('Y-m-d H:i:s', strtotime($request->input('schedule')));
        }
        $page->save();

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
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('pages.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $resources = Page::onlyTrashed()->paginate();

        return view("Theme::pages.trash")->with(compact('resources'));
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \Page\Requests\PageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request, $id)
    {
        $page = Page::onlyTrashed()->findOrFail($id);
        $page->restore();

        return back();
    }

    /**
     * Delete the specified resource from storage permanently.
     *
     * @param  \Page\Requests\PageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $page = Page::withTrashed()->findOrFail($id);
        $page->forceDelete();

        return redirect()->route('pages.trash');
    }
}
