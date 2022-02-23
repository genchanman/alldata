<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Datas;

use App\User;

use App\Timeline;



class RecordController extends Controller
{
    public function record(Users $users)
    {
        return view('omk/record')->with(['users'=>$users->get()]);
    }
    public function store(Request $request, Datas $datas)
    {
       $input_datas = $request['record'];
       $input_users = $request -> users_array;
       $datas->fill($input_datas)->save();
       $datas->users()->attach($input_users);
       return redirect('grades');
    }
    public function timeline(Timeline $timeline)
    {
        return view('omk/timeline')->with(['timelines'=>$timeline->get()]);
    }
   
    public function grades(User $users, Datas $datas)
    {
        
        return view('omk/grades')->with(['users'=>$users->get()]);
        
    }
}