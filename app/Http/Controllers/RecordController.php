<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Datas;

use App\Users;

use App\Timeline;



class RecordController extends Controller
{
    public function record()
    {
        return view('omk/record');
    }
    public function store(Request $request, Datas $datas)
    {
       
        $input = $request['record'];
        $datas->create($input);
    }
    public function login()
    {
        return view('omk/login');
    }
    public function timeline(Timeline $timeline)
    {
        return view('omk/timeline')->with(['timelines'=>$timeline->get()]);
    }
   
    public function grades()
    {
        return view('omk/grades');
    }
}