<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\massage;

use App\Models\newsadd;

use App\Models\app;

use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    public function addview ()
    {
    	return view('admin.add_doctor');
    }
    public function upload(Request $request)

    {
    	$doctor = new doctor;
    	$image=$request->file;

    	$imagename=time().'.'.$image->getClientoriginalExtension();

    	$request->file->move('doctorimage',$imagename);

    	$doctor->image=$imagename;

    	$doctor->name=$request->name;

    	$doctor->phone=$request->phone;

    	$doctor->spaciality=$request->spaciality;

    	$doctor->room=$request->room;

    	$doctor->bio=$request->bio;


        $doctor->save();

    	return redirect()->back()->with('massage','Doctor add sussessfuly');
    }
    public function display_app()
    {
        $data =app::all();

        return view('admin.appdisplay',compact('data'));
    }
    public function approved($id)
    {
        $data =app::find($id);

        $data->status='Approved';

        $data->save();

        return redirect()->back();

    }
    public function cancel($id)
    {
        $data =app::find($id);

        $data->status='cancel';

        $data->save();

        return redirect()->back();

    }
    public function alldoctor()
     {
        $data =doctor::all();

        return view('admin.alldoctor',compact('data'));
    }
    public function delete($id)
    {
        $data=doctor::find($id);

       
        $data->delete();

        return redirect()->back();
       
    }
    public function update($id)
    {

        $data=doctor::find($id);

        return view('admin.update_doctor',compact('data'));
    }


    public function editdoctor(Request $request , $id){

        $doctor=doctor::find($id);

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;

        $doctor->spaciality=$request->spaciality;

        $doctor->room=$request->room;

        $doctor->bio=$request->bio;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        $doctor->save();

        return redirect()->back()->with('massage','Doctor Detals update sucessfully ');

       

    }
    public function massage()
    {

         $data = massage::all();

        return view ('admin.massage',compact('data'));
    }    
    public function newsall()
    {

        return view('admin.allnews');
    }
    public function addnews_2()
    {
        return view ('admin.newsadd');
    }
    public function newsadd(Request $request )
    {
         $newsadd = new newsadd;

         $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $newsadd->image=$imagename;

        $newsadd->heading=$request->heading;

        $newsadd->spaciality=$request->spaciality;

        $newsadd->description=$request->description;

        $newsadd->name=$request->name;

        $newsadd->save();

        return redirect()->back();

        }

}
