<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function detail()
    {
        return view('profile.detail');
    }
}