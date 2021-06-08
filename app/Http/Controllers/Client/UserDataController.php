<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Profile;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        ],[
            'firstname.required' => 'Morate napisati svoje ime',
            'lastname.required' => 'Morate napisati svoje prezime',
            'street_and_number.required' => 'Morate napisati svoju ulicu i broj',
            'mobile_number.required' => 'Morate napisati svoj mobilni telefon',
            'email.required' => 'Morate napisati svoj email',
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

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'currentPassword' => ['required', new MatchOldPassword],
            'newPassword' => ['required'],
            'newPasswordAgain' => ['same:newPassword'],
        ],[
            'currentPassword.required' => 'Trenutna lozinka mora da se poduara sa starom lozinkom',
            'newPassword.required' => 'Unesite novu lozinku',
            'newPasswordAgain.same' => 'Mora da se podudara sa prethodno unetom lozinkom',
        ]);

        if($validated){
            $newPassword = User::find(auth()->id())->update(['password'=> Hash::make($request->newPassword)]);
            return redirect()->route('showUserDataPage')->with('success', 'Uspešno ste promenilu lozinku');
        }
        if(!$validated){
            return redirect()->route('showUserDataPage')->with('error', 'Nije uspelo');
        }
    }

}
