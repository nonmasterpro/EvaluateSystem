<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            # code...
        $id = Auth::id();
        $id = explode(",", $id);
        // dd($id);
        // 
        $arr=array();
        
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




      return view('report.index',['result' => $result , 'result2' => $result2,'result3' => $result3,'result4' => $result4,'result5' => $result5, 'reports' => $reports ]);
       }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


