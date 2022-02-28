<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Datas;

use App\User;

use App\Timeline;



class RecordController extends Controller
{
    public function record(User $users)
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
    public function maketimeline(User $users, Timeline $timelines)
    {
        return view('omk/maketimeline')->with(['users'=>$users->get()]);
    }
    public function make(Request $request, Timeline $timelines, User $user)
    {
        $input_timelines = $request['make'];
        $input_users = $request -> users_array;
        $timelines->fill($input_timelines)->save();
        $timelines->users()->attach($input_users);
        return view('omk/timeline')->with(["users"=>$user->get(), "timelines"=>$timelines->get()]);//->with(['users'=>$users->get()]);
    }
        
    
    public function timeline(User $users, Timeline $timelines)
    {
        return view('omk/timeline')->with(['timelines'=>$timelines->get()])->with(['users'=>$users->get()]);
    }
   
    public function grades(User $users, Datas $datas )
    {  // $i=1;
        //$users ->groupBy('uesr_id')->having('user_id', '=', $i++)->get();
        return view('omk/grades')->with(['users'=>$users->get()]);
    }
    
}