<?php
namespace App\Http\Controllers;
use File;
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

    public function getId($id)
    {

        try
        {
            $issues = json_decode(File::get('json/issues.json'));
        }
        catch (Illuminate\Filesystem\FileNotFoundException $exception)
        {
            die("The file doesn't exist");
        }

        $issue = null;

        foreach($issues as $s){
            if( isset($s->id) && $s->id == $id){
                $issue = $s;
            }
        }

        if($issue === null){
            return 'bestaat niet';
        }
        return view('detail')->with('issue', $issue);
    }
}