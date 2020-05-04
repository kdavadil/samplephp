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
        return view('home');
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
        $output.='<tr>'.
        '<td>'.$attendee->fullname.'</td>'.
        '<td><button type="submit" class="btn btn-default btn-block">REGISTER</button></td>'.
        '</tr>';
                }
        return Response($output);

            }
        }
    }

    public function related() {
        $relative = Attendee::where('fullname','davadilla')->get();

        if(! $name) {
            abort(404);
        }
        return view('welcome', [
            'name' => $name
        ]);
    } 

}

    

 