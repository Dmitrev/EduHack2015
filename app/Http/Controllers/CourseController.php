<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return view('course');
    }

    public function detail()
    {
    	return view('detail');
    }
}