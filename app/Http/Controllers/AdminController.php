<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\housesell;
use App\Models\comment;
class AdminController extends Controller
{

    public function users()
    {
  $data=user::all();
        return view('admin.users',compact("data"));
    }


    public function deleteuser($id)
    {
       $data=user::find($id);
       $data->delete();
        return redirect()->back();
    }



    public function deletehousesell($id)
    {
       $data=housesell::find($id);
       $data->delete();
        return redirect()->back();
    }




    public function updatehousesell($id)
    {
       $data=housesell::find($id);
       return view("admin.updatehousesell",compact("data"));
    }



    public function housesell()
    {
     $data=housesell::all();
        return view('admin.housesell',compact("data"));
    }
    public function renthouse()
    {
    
        return view("admin.renthouse");
    }





    public function uploadsellhouse(Request  $request)
    {
       $data=new housesell();
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('housesellimage',$imagename);
       $data->image=$imagename;
       $data->title=$request->title;
       $data->price=$request->price;
       $data->location=$request->location;
       $data->state=$request->state;
       $data->housetype=$request->housetype;
       $data->no_of_rooms=$request->no_of_rooms;
       $data->no_of_bedroom=$request->no_of_bedroom;
       $data->no_of_kitchen=$request->no_of_kitchen;
       $data->phone_number=$request->phone_number;
       $data->commission_fee=$request->commission_fee;
       $data->size_of_house=$request->size_of_house;
       $data->description=$request->description;
       $data->save();
       return redirect()->back();
      
    }






    public function comment(Request  $request)
    {
       $data=new comment();
      
       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->message=$request->message;
       
       $data->save();
       return redirect()->back();
      
    }



    public function viewcomment()
    
    {
$data=comment::all();
return view("admin.admincomment",compact("data"));
    }
}

