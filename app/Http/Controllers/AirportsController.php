<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Airports;
use Auth;
use Session;


class AirportsController extends Controller
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
      
       return view('airports.index');
   
    }

    // Shows list of  airports

     public function listofairports()
    {
       $airports = Airports::all(); 
       
       return view('airports.existing')->with('airports', $airports);
      
   
    }
    //Brings a form to input new airport
    public function addairportform()
    {
      
       return view('airports.new');
   
    }

   //adds new plane to databse
    public function addairport()
    {
        
        $name_before_convert_to_lwc= Input::get('name');
        $name=strtolower($name_before_convert_to_lwc);
        $country = Input::get('country');
        $county = Input::get('county');
        $level =  Input::get('level');
        $type =  Input::get('type');

     
    
  
      
        // Validation of inputs to fit the correct format
         
          $rules = array(
                     
                    'name'=>'Required||Between:1,120|String',
                    'country'=>'Required||Between:1,120|String',
                    'county' => 'Required|Between:1,100|String',                
                    'level' => 'Required||Between:1,100|String',
                    'type' => 'Required||Between:1,120|String',
                    
            
                     );
                        //lets check validations

           $validator = Validator::make(Input::all(), $rules);

           if ($validator->fails()) 
                
                {
              
              $messages = $validator->messages();

              // redirect our user back to the form with the errors from the validator
              return redirect()->route('addairportform')->withErrors($validator);


                }
             
             //lets check if the airport does exist

        $check_if_plane_exist = Airports::wherename($name)->first(); 

        if ($check_if_plane_exist)
         {
        	return redirect()->route('addairportform')->with('flash_message', 'Airport :'.$name .' ,Does exist.Kindly change the name.');

         }
         else
         {
	        $newairport = new Airports;
	        $newairport->name=$name;
	        $newairport->country=$country;
	        $newairport->county=$county;
	        $newairport->level=$level;
	        $newairport->type=$type; 
	        $check =$newairport->save();
	       
	        if ($check) 
	        {
	        	return redirect()->route('addairportform')->with('flash_message', 'Airport :'.$name .' ,has been created successfully created.');
	        }
	        else
	        {
	        	return redirect()->route('addairportform')->with('flash_message', 'Operation has not been possible.Please try again');
	        }

         }
     
      
       
    
   
    }
}
