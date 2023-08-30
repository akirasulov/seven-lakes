<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'msisdn' => 'required',
            'sex' => 'required',
            'emergency_contact' => 'required',
        ]);

        try {
            $registration = Registration::create($request->post());
            $num = $registration->id > 99 ? 'Ваш номер' . $registration->id : 'Ваш номер 0' . $registration->id;
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }

        return back()->with('success', $num);
    }
}
