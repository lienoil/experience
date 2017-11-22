<?php

namespace Page\Controllers;

use Frontier\Controllers\AdminController;
use Illuminate\Http\Request;
use Page\Models\Page;

class PageManyController extends AdminController
{
    /**
     * Restore the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request)
    {
        foreach ($request->input('pages') as $id) {
            $page = Page::onlyTrashed()->findOrFail($id);
            $page->restore();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        foreach ($request->input('pages') as $id) {
            $page = Page::findOrFail($id);
            $page->delete();
        }

        return redirect()->route('pages.index');
    }

    /**
     * Delete the specified resource from storage permanently.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        foreach ($request->input('pages') as $id) {
            $page = Page::withTrashed()->findOrFail($id);
            $page->forceDelete();
        }

        return back();
    }
}
