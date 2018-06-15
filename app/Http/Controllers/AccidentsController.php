<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Validator;
use Cookie;
use Illuminate\Support\Facades\Redirect;
use App\Incidents;
use App\Aeroplanes;
use Auth;
use Session;


class AccidentsController extends Controller
{
    public function index()
    {
      
       return view('accidents.index');
   
    }

    // Shows list of  airports

     public function listofaccidents()
    {
       $accidents = Incidents::all(); 
       return view('accidents.existing')->with('accidents', $accidents);
      
   
    }
    //Brings a form to input new airport
    public function addaccidentform()
    {
        $aircraft = Aeroplanes::all()->pluck('aircraft_id','aircraft_id');
        return view('accidents.new')->with('aircraft', $aircraft);
       
   
    }
    public function addaccident()
    {
        $incidentid= intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
        $aeroplane = Input::get('aeroplane');
        $incidentname= Input::get('incidentname');
        $location =  Input::get('location');
        // $image = Input::get('image');
        $casualties =  Input::get('casualties');
        $damagelevel =  Input::get('damagelevel');
        $description =  Input::get('description');

         // Validation of inputs to fit the correct format
         
          $rules = array(
                     
                    'aeroplane'=>'Required||Between:1,120|String',
                    'incidentname' => 'Required|Between:1,100|String',
                    'location' => 'Required|Between:1,100|String',
                    //'image' => 'Required|Between:1,100|String',              
                    'casualties' => 'Required||min:0|Integer',
                    'damagelevel' => 'Required||Between:1,120|String',
                    'description' => 'Required||Between:1,1000|String',
                     );
        //lets check validations

           $validator = Validator::make(Input::all(), $rules);

           if ($validator->fails()) 
                
                {
              
              $messages = $validator->messages();

              // redirect our user back to the form with the errors from the validator
              return redirect()->route('addaccidentform')->withErrors($validator);


                }
          
          $newincident = new Incidents;
          $newincident->incidentid=$incidentid;
          $newincident->aeroplane=$aeroplane;
          $newincident->incidentname=$incidentname;
          $newincident->location=$location;
          // $newincident->image=$image; 
          $newincident->casualties=$casualties;
          $newincident->damagelevel=$damagelevel;
          $newincident->description=$description; 
          $check_if_saved = $newincident->save();
          if ($check_if_saved) 
          {
          $user = Auth::user();
          $myname = $user->name;
          $cookie = Cookie::make(trim($myname), $incidentid);
          return view('upload-image')->with('newincident', $newincident);
 
          }
          else
          {
           return redirect()->route('addaccidentform')->with('flash_message', ' '.$incidentname.' can not be added right now.Please try again.'); 
          }
   
    }
}
