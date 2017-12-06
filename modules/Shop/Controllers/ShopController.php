<?php

namespace Shop\Controllers;

use Frontier\Controllers\AdminController;
use Illuminate\Http\Request;
use Shop\Models\Shop;
use Shop\Requests\ShopRequest;

class ShopController extends AdminController
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

        return view("Theme::shops.index");
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

        return view("Theme::shops.show");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("Theme::shops.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Shop\Requests\ShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopRequest $request)
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

        return view("Theme::shops.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Shop\Requests\ShopRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShopRequest $request, $id)
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

        return redirect()->route('shops.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //

        return view("Theme::shops.trash");
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \Shop\Requests\ShopRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(ShopRequest $request, $id)
    {
        //

        return back();
    }

    /**
     * Delete the specified resource from storage permanently.
     *
     * @param  \Shop\Requests\ShopRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(ShopRequest $request, $id)
    {
        //

        return redirect()->route('shops.trash');
    }
}
