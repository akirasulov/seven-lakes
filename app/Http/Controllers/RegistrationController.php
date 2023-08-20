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
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:',
            'msisdn' => 'required|max:20|min:9|unique:',
            'sex' => 'required|string',
            'emergency_contact' => 'required|max:20|min:9',
        ]);

        try {
            Registration::create($request->post());
        } catch (\Throwable $th) {
            return back()->with('error', '');
        }

        return back()->with('success', '');
    }
}
