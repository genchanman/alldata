<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Datas;

use App\User;

use App\Timeline;

use App\Calcurated;



class RecordController extends Controller
{
    public function record(User $user)
    {
        $user=Auth::user();
        return view('omk/record')->with(['user'=>$user]);
    }
    public function store(Request $request, Datas $datas)
    {
        $input_datas = $request['record'];
        $input_users = $request -> user_id;
        $datas->fill($input_datas)->save();
        $user=Auth::user()->id;
        $datas->users()->attach($input_users);
        return redirect('/grades/' . $user);
    }
    public function comfirmed(User $users)
    {
        return view('omk/comfirmed')->with(['users'=>$users->get()]);
    }
    public function call(Request $request, Calcurated $calcurated)
    {
        $input_calcurated = $request['call'];
        $input_users = $request -> users_array;
        $calcurated->fill($input_calcurated)->save();
        $calcurated->users()->attach($input_users);
        return redirect('grades');
    }
    public function maketimeline(User $users, Timeline $timelines)
    {
        $user=Auth::user();
        return view('omk/maketimeline')->with(['user'=>$user]);
    }
    public function make(Request $request, Timeline $timelines)
    {
        $input_timelines = $request['make'];
        $input_users = $request -> users_array;
        $timelines->fill($input_timelines)->save();
        $timelines->users()->attach($input_users);
        return view('omk/timeline');//->with(['users'=>$users->get()]);
    }
        
    
    public function timeline(User $users, Timeline $timelines)
    {
        return view('omk/timeline')->with(['timelines' => $timelines->getByLimit()]);
    }
   
    public function grades(User $user, Datas $datas, $users)
    {  // $i=1;
        //$users ->groupBy('uesr_id')->having('user_id', '=', $i++)->get();
        $user = $user->find(1);
        $datas = $datas->users($users)->get();
        return view('omk/grades')->with(['datas'=> $datas, 'user' => $user]);
    }
    public function home()
    {
        return view('omk/home');
    }
    public function userrecord()
    {
        return view('omk/userecord');
    }
    
}