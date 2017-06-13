<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Auth;
use Alert;
use App\User;
use App\Report;


class UserController extends Controller
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
      $User = Auth::user();
      $user = user::all();
      // $report = report::where('comment_name',"$User->name $User->lastname");
      $report = report::all();

      $name = $User->name.' '.$User->lastname;
      // dd($name);
      $reportDub = report::where('comment_name',$name)->get();
      $p = "Evaluated";
      // $reportDub2 = report::findOrFail($id);
      // dd($reportDub);

      return view('user.index',['users' => $user,'user' => $User, 'reports' => $report ,'reportuser'=>$reportDub,
       'name'=>$name, 'p'=>$p]);
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
        if (Auth::user()) {
            # code...
        
        //
        $User = Auth::user();
        $Users = user::all();


        return view('user.create', ['user' => $User],['users' => $Users]);
         }
        else{
            return redirect('/');
        }
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function storett(Request $request)
    {
       //
    }

    public function store(Request $request)
    {
        $user_id = $request -> user_id;
        $point = $request -> point;
        $comment = $request -> comment;
        $comment_name = $request -> comment_name;

        $reports = new report;

        $reports['user_id'] = $user_id;
        $reports['point'] = $point;
        $reports['comment'] = $comment;
        $reports['comment_name'] = $comment_name;

        $reports->save();

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()) {
            $User = Auth::user();
            $idd = $id;
            $idd = explode(",", $idd);
            $name = $User->name.' '.$User->lastname;
            foreach($idd as $i) {
                $reportt = report::where('user_id',$i)->where('comment_name',$name)->get();
            }
            if(sizeof($reportt)!=0){

            session()->flash('message','Already Evaluated!');
            
            return redirect('/user');
            }else{
              $User = Auth::user();
              $ids = $id;
              $ids = explode(",", $ids);
              foreach($ids as $i) {
              // $q = user::where('userId', $i)->get();
                 }
             }

      return view('user.show', ['users' => user::findOrFail($id)],['user' => $User]);
       }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         if (Auth::user()) {
            # code...
        
        //
        $user = user::findOrFail($id);
        $User = user::all();


    return view('user.edit', compact('user'), ['users' => $User]);
     }
        else{
            return redirect('/');
        }
    }

    public function editUsername($id)
    {
         if (Auth::user()) {
            # code...
        
        //
        $user = user::findOrFail($id);
        $User = user::all();


    return view('user.editUsername', compact('user'), ['users' => $User]);
     }
        else{
            return redirect('/');
        }
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


    public function updateUsername(Request $request, $id)
    {
          $email = $request -> email;

          $user = user::findOrFail($id);

          $user->email = $email;
          $user->save();

          return redirect('/home')->with('alert-success','Data Hasbeen Saved');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user->delete();
        return redirect('user')->with('alert-success','Data Hasbeen Saved');
    }
}
