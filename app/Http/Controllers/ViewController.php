<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Consultation;
use App\Models\Unit;
use phpDocumentor\Reflection\Types\Array_;

class ViewController extends Controller
{
    //
    public function index()
    {
        //
    }
    public function searchClass(Request $request)
    {
        //
        if(session('name')=='')
            return redirect('out');
        $classes = new Classes();
        if($request->get('classitem')==1)
        {
            $staff = Staff::where('id', 'like','%'.$request->get('cltext').'%')
                            ->orwhere('given_name', 'like','%'.$request->get('cltext').'%')
                            ->orwhere('family_name', 'like','%'.$request->get('cltext').'%')
                            ->get();
            $arr = array();
            foreach ($staff as $row)
            {
                array_push($arr,$row->id);

            }
            $classes = Classes::whereIn('staff', $arr)->get();
            //return $classes;
        }
        else
        {
            $units = Unit::where('code', 'like','%'.$request->get('cltext').'%')
                            ->orwhere('title', 'like','%'.$request->get('cltext').'%')
                            ->get();
            $arr = array();
            foreach ($units as $row)
            {
                array_push($arr,$row->code);

            }
            $classes = Classes::whereIn('unit_code',$arr)->get();
        }

        //return $classes;
        return view('showclass',compact('classes'));

    }

    public function searchConsultation(Request $request)
    {
        //
        if(session('name')=='')
            return redirect('out');
        $consultations = new Consultation();
        if($request->get('consultation')==1)
        {
            $staff = Staff::where('id', 'like','%'.$request->get('cstext').'%')
                            ->orwhere('given_name', 'like','%'.$request->get('cstext').'%')
                            ->orwhere('family_name', 'like','%'.$request->get('cstext').'%')
                            ->get();
            $arr = array();
            foreach ($staff as $row)
            {
                array_push($arr,$row->id);

            }
            $consultations = Consultation::whereIn('staff_id', $arr)->get();
        }
        else
        {
            $classes = Classes::where('unit_code', 'like','%'.$request->get('cstext').'%')->get();
            $arr = array();
            foreach ($classes as $row)
            {
                array_push($arr,$row->staff);

            }
            $consultations = Consultation::whereIn('staff_id',$arr)->get();
        }

        //return $classes;
        return view('showconsultation',compact('consultations'));

    }

    public function viewprofile()
    {
        if(session('name')=='')
            return redirect('out');
        $staff = new Staff();
        if (session('name')!='student'){
            $staff = Staff::find('123456');
        }
        else {
            $staff->id = 555666777;
            $staff->given_name = 'student';
            $staff->last_name = 'student';
            $staff->title = 'student';
            $staff->campus = 'Hobart';
            $staff->phone = '1234567890';
            $staff->room = '20 College Road';
            $staff->email = 'student@utas.edu.au';
            $staff->category = 'student';
        }

        return view('profile',compact('staff'));
    }

    public function updateprofile(Request $request)
    {
        if(session('name')=='')
            return redirect('out');
        $staff = Staff::find($request->get('staffid'));
        $staff->given_name=$request->get('givename');
        $staff->family_name=$request->get('familyname');
        $staff->title=$request->get('title');
        $staff->campus=$request->get('campus');
        $staff->campus=$request->get('campus');
        $staff->phone=$request->get('phone');
        $staff->email=$request->get('email');
        $staff->update();
        return view('profile',compact('staff'));
    }

    public function mainview()
    {
        if(session('name')=='')
            return redirect('out');
        if(session()->get('name')=='')
            return redirect('/');
        return view('main');
    }

    public function staffdetails($id)
    {
        if(session('name')=='')
            return redirect('out');
        $staff=Staff::find($id);
        return view('staffdetails',compact('staff'));
    }
    public function unitdetails($id)
    {
        if(session('name')=='')
            return redirect('out');
        $unit=Unit::where('code',$id)->get();
        //return $unit;
        return view('unitdetails',compact('unit'));
    }

    public function classdetails($id,$campus,$day)
    {
        if(session('name')=='')
            return redirect('out');
        //return $id;

        $class=Classes::where('unit_code',$id)
                        ->where('campus',$campus)
                        ->where('day',$day)->get();
        //return $class;
        return view('classdetails',compact('class'));
    }
    public function consultationdetails($id,$day)
    {
        if(session('name')=='')
            return redirect('out');
        $consultation=Consultation::where('staff_id',$id)
                                    ->where('day',$day)->get();
        return view('consultationdetails',compact('consultation'));
    }
}
