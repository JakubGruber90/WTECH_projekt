<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{

    /**
     * Display the user's profile form.
     */
    public function editLoginInfo(Request $request): View
    {
        return view('editLoginInfo')->with('user', $request->session()->get('user'));
    }

    public function editShippingInfo(Request $request): View
    {
        return view('editShippingInfo')->with('user', $request->session()->get('user'));
    }

    public function editLogin(Request $request) {
        $userSession = $request->session()->get('user');
        $user = User::whereRaw("id = '" . $userSession->id . "'")->get()[0];

        if ($request->email) {
            $user->update([
                'email' => $request->email
            ]);
        }
        if ($request->first_name) {
            $user->update([
                'first_name' => $request->first_name
            ]);
        }
        if ($request->last_name) {
            $user->update([
                'last_name' => $request->last_name
            ]);
        }
        if ($request->password) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect()->route('showProfile');
    }

    public function editShipping(Request $request) {
        $userSession = $request->session()->get('user');
        $user = User::whereRaw("id = '" . $userSession->id . "'")->get()[0];

        if ($request->phone_number) {
            $user->update([
                'phone_number' => $request->phone_number
            ]);
        }
        if ($request->address) {
            $user->update([
                'address' => $request->address
            ]);
        }
        if ($request->city) {
            $user->update([
                'city' => $request->city
            ]);
        }
        if ($request->country) {
            $user->update([
                'country' => $request->country
            ]);
        }

        return redirect()->route('showProfile');
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

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showProfile(Request $request) {
        $id = $request->session()->get('user')->id;
        $email = $request->session()->get('user')->email;
    
        $user = User::whereRaw("id = '" . $id . "'")->get()[0];

        return view('profile', [
            'user' => $user
        ]);
    }
}
