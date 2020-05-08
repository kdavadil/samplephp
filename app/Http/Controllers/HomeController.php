<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attendee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('register')->with('names', Attendee::all());
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
        $output="";
        $attendees= DB::table('attendees')->where('fullname','LIKE','%'.$request->search."%")->get();
        if($attendees)
            {
        foreach ($attendees as $key => $attendee) {
        $output.='
        <li class="list-group-item">
        <span>'.$attendee->fullname.'</span>
        <a href="/going/'.$attendee->id.'" class="btn btn-info btn-sm float-right mr-2">Register</a>
        <input type="hidden" name="Name" value="'.$attendee->fullname.'">
        </li>'
        ;
        }
        return Response($output);

            }
        }
    }
    
    public function register(Request $request, Attendee $name) {

    $data = Attendee::find($request->id);
    //dd($data);
    $confirm =  $data::where('id','=',$data['id'])->update(array('Attendance' => 1));
    session()->flash('success', 'Registration sucessful. See you soon!');
    return redirect('/');
    }

}

    

 