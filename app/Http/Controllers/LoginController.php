<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    //
    public function index()
    {
        //
        $msg="";
        return view('login',compact('msg'));
    }
    public function out(Request $request)
    {
        //
        $request->session()->flush();
        return redirect('/');
    }

    public function checklog(Request $request)
    {
        //
        $msg="";

        if($request->get('username')=='student') {
            if ($request->get('password') == 'student') {
                $msg = "login success";
                session(['name' => 'student']);
                session(['staff' => '0']);
                return view('main');
            }
            else $msg ="login failed";
        } else $msg= "login failed";
        if($request->get('username')=='nick@gmail.com') {
            if ($request->get('password') == 'staff') {
                $msg = "login success";
                $staff = Staff::find('123456');
                session(['name' => ''.$staff->given_name.' '.$staff->family_name]);
                session(['staff' => '1']);
                return redirect('profile');
            }
            else $msg ="login failed";
        } else $msg= "login failed";
        //return session('name');

        return view('login',compact('msg'));
    }
}
