<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function detail()
    {
        return view('group.detail');
    }
}