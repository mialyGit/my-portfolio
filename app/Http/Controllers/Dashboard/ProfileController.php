<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\SaveProfileRequest;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();

        return view('dashboard.profile.edit', compact('profile'));
    }

    public function save(SaveProfileRequest $request)
    {
        $profile = Profile::first();

        $profile->update($request->only([
            'firstname',
            'name',
            'email',
            'address',
            'phone_1',
            'phone_2',
        ]));

        return redirect()->route('dashboard.profile')
            ->with('message', __('Updated with success'));
    }
}
