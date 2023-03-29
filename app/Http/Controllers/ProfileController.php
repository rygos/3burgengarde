<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function update_profile(Request $request): RedirectResponse {
        $user = Auth::user();

        $user->beername = $request->get('beername');
        $user->birthdate = $request->get('birthdate');
        $user->adr_city = $request->get('adr_city');
        $user->adr_street = $request->get('adr_street');
        $user->adr_zip = $request->get('adr_zip');
        $user->phone_mobile = $request->get('phone_mobile');
        $user->phone_home = $request->get('phone_home');

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'personal-profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function admin_destroy($userid){
        if(Auth::user()->perm_admin == 1){
            $user = User::whereId($userid)->first();
            return view('profile.admin_delete',[
                'user' => $user,
            ]);
        }else{
            return \redirect('/');
        }
    }

    public function admin_destroy_post(Request $request){
        if(Auth::user()->perm_admin == 1){
            if($request->get('delcheck') == 'DELETE'){
                $user = User::whereId($request->get('userid'))->first();
                $user->delete();
            }
        }
        return \redirect()->route('members.index');
    }

}


