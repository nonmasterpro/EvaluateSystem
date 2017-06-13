<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Report;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = Auth::user();


        $id = Auth::id();
        $id = explode(",", $id);
        foreach($id as $ids) {
        $five = report::where('user_id', $ids)->where('point', 5)->get();
        
        }
        foreach($id as $ids) {
        $four = report::where('user_id', $ids)->where('point', 4)->get();
        
        }
        foreach($id as $ids) {
        $three = report::where('user_id', $ids)->where('point', 3)->get();
        
        }
        foreach($id as $ids) {
        $two = report::where('user_id', $ids)->where('point', 2)->get();
        
        }
        foreach($id as $ids) {
        $one = report::where('user_id', $ids)->where('point', 1)->get();
        
        }

        foreach($id as $ids) {
        $reports = report::where('user_id', $ids)->get();
        
        }


        $result = count($one);
        $result2 = count($two);
        $result3 = count($three);
        $result4 = count($four);
        $result5 = count($five);


        return view('home', ['user'=>$User, 'result' => $result , 'result2' => $result2,'result3' => $result3,'result4' => $result4,'result5' => $result5]);
    }
}
