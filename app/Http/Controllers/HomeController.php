<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\user;

use App\Models\Doctor;

use App\Models\app;

use App\Models\massage;

use App\Models\newsadd;


class HomeController extends Controller
{
    //
    public function redirect()
    {
    	if(Auth::id())
    	{
    		if(Auth::user()->usertype=='0')
    		{
                $doctor = doctor::all();

    			return view('user.home',compact('doctor'));
    		}
    		else
    		{
    			return view('admin.home');
    		}
    	}
    	else
    	{
    		return redirect()->back();
    	}

    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');

        }
        else
        {
       $doctor = doctor::all();

       $newsadd = newsadd::all();


    	return view('user.home',(compact('doctor','newsadd')));
      
     }
    }
    
    public function upload(Request $request){

        $appointment = new app;

        $appointment->name=$request->name;

        $appointment->email=$request->email;

        $appointment->date=$request->date;


        $appointment->number=$request->number;


        $appointment->departement=$request->departement;


        $appointment->massage=$request->massage;

        $appointment->status='in process';

        if(Auth::id())
        {
            $appointment->user_id=Auth::user()->id;
        }
        $appointment->save();

        return redirect()->back()->with('massage','Your appointment add sucessfully');
    }   
    public function app_cancel()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $app=app::where('user_id',$userid)->get();

        return view('user.myappcancle',compact( 'app'));
        }

        else
        {
            return redirect()->back();
        }
    } 
    public function cancel_appo($id)
    {

        $data =app::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function about(Request $request){
        
        $doctor = doctor::all();

      return view('user.about',compact('doctor'));  
    }
    public function doctor(Request $request)
    {

        $doctor = doctor::all();

        return view('user.alldoctor',compact('doctor'));  
    }
     public function news(){

        $newsadd = newsadd::all();
        
      return view('user.news',compact('newsadd')); 
    }
     public function contact(){

      return view('user.contact' );  
    }
    public function massage(Request $request)
    {
        $massage= new massage;

        $massage->name=$request->name;

        $massage->email=$request->email;

        $massage->subject=$request->subject;

        $massage->massage=$request->massage;

        $massage->save();

        return redirect()->back()->with('massage','Your send  sucessfully massage');

    }    
    
}
