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
        return view('welcome');
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
        '<td>'.$attendee->famID.'</td>'.
        '</tr>';
                }
        return Response($output);

            }
        }
    }

    public function attend() {
        $name = Attendee::where('fullname','davadilla')->first();

        if(! $name) {
            abort(404);
        }
        return view('welcome', [
            'name' => $name
        ]);
    } 

}

    

 