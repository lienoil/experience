<?php

namespace Profile\Controllers;

use Frontier\Controllers\AdminController;
use Illuminate\Http\Request;
use Profile\Models\Profile;
use Profile\Requests\ProfileRequest;
use User\Models\User;

class ProfileController extends AdminController
{
    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string  $handle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $handle = "")
    {
        if (empty($handle)) {
            return back();
        }

        $resource = User::whereUsername(ltrim($handle, '@'))->first();

        return view("Theme::profiles.show")->with(compact('resource'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("Theme::profiles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Profile\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileControllerRequest $request)
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
    public function edit(ProfileRequest $request, $handle)
    {
        $resource = User::whereUsername(ltrim($handle, '@'))->firstOrFail();
        $avatars = User::avatars();

        return view("Theme::profiles.edit")->with(compact('resource', 'avatars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \ProfileController\Requests\ProfileControllerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $handle)
    {
        $user = User::whereUsername($handle)->firstOrFail();
        $user->firstname = $request->input('firstname');
        $user->avatar = $request->input('avatar');
        $user->middlename = $request->input('middlename');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->save();

        // foreach ($request->input('details') as $key => $value) {
        //     $user->details()->updateOrCreate(['key' => $key], ['key' => $key, 'value' => $value]);
        // }

        return redirect()->route('profile.show', $user->handlename);
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

        return redirect()->route('ProfileController.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //

        return view("Theme::profiles.trash");
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \ProfileController\Requests\ProfileControllerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(ProfileControllerRequest $request, $id)
    {
        //

        return back();
    }

    /**
     * Delete the specified resource from storage permanently.
     *
     * @param  \ProfileController\Requests\ProfileControllerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(ProfileControllerRequest $request, $id)
    {
        //

        return redirect()->route('ProfileController.trash');
    }
}
