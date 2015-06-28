<?php
/**
 * Created by PhpStorm.
 * User: dmitri
 * Date: 28-6-15
 * Time: 1:01
 */

namespace App\Http\Controllers;
use Input, File, Storage, Redirect;

class IssuesController extends Controller{
    public function add(){
        return view('issue-add');
    }

    public function postAdd(){
        try
        {
            $issues = json_decode(File::get('json/issues.json'));
        }
        catch (Illuminate\Filesystem\FileNotFoundException $exception)
        {
            die("The file doesn't exist");
        }


        $issues[] = array(
            'title' => Input::get('title'),
            'desc' => Input::get('description')
        );

        $issues = json_encode($issues);


        File::put('json/issues.json', $issues );

        return Redirect::to('issue/add');
    }
}