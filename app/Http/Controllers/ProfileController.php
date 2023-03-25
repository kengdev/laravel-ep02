<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profiles;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = new Profiles();
        $profile->name = "Com-Sci";
        $profile->lastname = "IT";

        Profiles::create($profile);
        return view('covid19/index');
    }
}
