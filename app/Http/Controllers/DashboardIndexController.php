<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Support\Facades\Request;

class DashboardIndexController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Dashboard', [
            'registration' => Registration::query()
                ->orderBy('id', 'desc')
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->OrWhere('email', 'like', '%' . $search . '%')
                        ->OrWhere('surname', 'like', '%' . $search . '%')
                        ->OrWhere('msisdn', 'like', '%' . $search . '%')
                        ->OrWhere('emergency_contact', 'like', '%' . $search . '%')
                        ->OrWhere('sex', 'like', '%' . $search . '%')
                        ->OrWhere('id', 'like', '%' . $search . '%');
                })->paginate(10),
            'filters' => Request::only(['search']),
        ]);
    }
}
