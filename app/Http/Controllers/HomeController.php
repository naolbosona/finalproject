<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use\App\Models\User;
use\App\Models\Housesell;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
   {
      $data=housesell::all();
       return view("home" ,compact("data"));
   }

   public function redirects()
   {  
      
    $data=housesell::all();
      $usertype=Auth::user()->usertype;
      if ($usertype=='1'){

          return view('admin.adminhome');

      }
      elseif($usertype=='2'){

        return view('admin.adminhome');

    }


      else{
          return view('home',compact("data"));
      }

}}
