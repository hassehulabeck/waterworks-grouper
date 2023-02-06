<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\Models\Vote;


class AdminController extends Controller
{
    public function index()
    {
        $votes = DB::table('votes')
            ->orderBy('method', 'asc')
            ->get();
        
        return view('admin', ['votes' => $votes]);
    }
    /**
     * Show the form for login.
     *
     * @return \Illuminate\Http\Response
     */
    public function renderForm()
    {
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)){
            return Redirect::to('/admin');
        }
        else {
            return Redirect::back()->withErrors(['errors' => 'Not accepted credentials, man.']);
        }
    } 

    public function setGroups(Request $request) {
        
        $values = $request->all();

        for ($i=0; $i<count($values['id']); $i++){
            $vote = Vote::find((int)$values['id'][$i]);
            $vote->group = $values['group'][$i];
            $vote->save();
        }
        return Redirect('/admin');
    }

}
