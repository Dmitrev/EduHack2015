<?php
/**
 * Created by PhpStorm.
 * User: dmitri
 * Date: 27-6-15
 * Time: 23:57
 */

namespace App\Http\Controllers;
use File;
use App\Http\Controllers\Controller;

class TestController extends Controller{
    /* Get users */
    public function index(){

        try
        {
            $users = json_decode(File::get('json/users.json'));
        }
        catch (Illuminate\Filesystem\FileNotFoundException $exception)
        {
            die("The file doesn't exist");
        }


        return view('test')->with('users', $users );
    }
}