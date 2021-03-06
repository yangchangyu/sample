<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
	     return view('sessions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials,$request->has('remember'))){
            session()->flash('success','welcome!!!');
            return redirect()->intended(route('users.show',[Auth::user()]));
        }else{
            session()->flash('danger','sorry,pwd not match email');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success','logout');
        return redirect('login');
    }

    public function __construct()
    {
        $this->middleware('guest',[
            'only' => ['create']
        ]);
    }

}
