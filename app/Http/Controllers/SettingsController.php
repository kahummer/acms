<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use App\Settings;
use Auth;
use Session;

class SettingsController extends Controller
{

    public function __construct() 
     {
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      return view('settings.index');
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $housetype=Input::get('housetype');
        $rent=Input::get('rent');
        $deposit=Input::get('deposit');
        $security=Input::get('security');
        $garbage=Input::get('garbage');

        $checkifexist = Settings::wherehousetype($housetype)->first();
        if ($checkifexist)
         {
             $checkifexist->rent=$rent;
             $checkifexist->deposit=$deposit;
             $checkifexist->security=$security;
             $checkifexist->garbage=$garbage;
             $updated = $checkifexist->update();
             if ($updated) 
             {
                 return redirect()->route('settings.index')->with('flash_message', 'Setting has been updated succefully');
             }

         }


       $settings = new Settings;
       $settings->housetype=$housetype;
       $settings->rent=$rent;
       $settings->deposit=$deposit;
       $settings->security=$security;
       $settings->garbage=$garbage;
       $checker = $settings->save();
      
       if ($checker) {
           return redirect()->route('settings.index')->with('flash_message', 'Setting has been succefully published.');
       }
       else
       {
         return redirect()->route('settings.index')->with('flash_message', 'Ooops!! Something has happend and am having trouble publishing youe setings.Contact Administrator.');
       }
     
    }


 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function existingcharges()
    {
      $existingsettings = Settings::all(); 
     return view('settings.show')->with('existingsettings', $existingsettings);
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
