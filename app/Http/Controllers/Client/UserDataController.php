<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Profile;
use App\User;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index()
    {
        $currentUserId = auth()->id();
        $userData = User::with('profile')->where('id', $currentUserId)->first();
        return view('client.user_data', ['userData' => $userData]);
    }

    public function updateProfile(Request $request, $id)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'street_and_number' => 'required',
            'mobile_number' => 'required',
            'email' => 'required',
        ]);
        if($validated) {
            $profile = Profile::where('user_id', $id)->update(['firstname' => $request->firstname, 'lastname' => $request->lastname, 'country' => $request->country, 'township' => $request->township, 'pak' => $request->pak, 'mobile_number' => $request->mobile_number]);
            $user = User::where('id', $id)->update(['email' => $request->email]);
            if ($profile && $user) {
                return redirect()->route('showUserDataPage')->with('success', 'Uspešno ste ažurirali svoje podatke.');
            } else {
                return redirect()->route('showUserDataPage')->with('error', 'Došlo je do greške, pokušajte ponovo.');
            }
        }

    }

}
