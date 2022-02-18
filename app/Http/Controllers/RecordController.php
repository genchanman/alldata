<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Datas;



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
<<<<<<< HEAD

=======
>>>>>>> 
}