<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Education;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalInformationController extends Controller
{

    public function index()
    {
        $user = Auth::user()->load([
            'contact',
            'experiences.responsibles',
            'educations',
            'skills'
        ]);

        return view('pages.personal-information.index', compact('user'));
    }

    public function saveInformations(){

    }
}
