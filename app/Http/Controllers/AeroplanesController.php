<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Aeroplanes;
use Auth;
use Session;


class AeroplanesController extends Controller
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
      
       return view('aeroplanes.index');
   
    }
      public function existing()
    {
      
       $aeroplanes = Aeroplanes::all(); 

       return view('aeroplanes.existing')->with('aeroplanes', $aeroplanes);
   
    }
    public function destroy($id) {
        
        $aeroplanes = Aeroplanes::findOrFail($id);
        $aeroplanes->delete();
        Session::flash('message', 'The Aeroplane has been deleted');

       return redirect('aeroplanes');

    }

     #function opens up  a form to add a new plane
    public function addplaneform()
      {
        
         return view('aeroplanes.new');
     
      }
    public function edit($id)
    {

        // get the nerd
        $aeroplanes = Aeroplanes::find($id);
      
        // show the edit form and pass the nerd
        return \View::make('aeroplanes.edit')->with('aeroplanes', $aeroplanes);

    }
    
     public function update(Request $request, $id)
    {
     
         $aeroplanes = Aeroplanes::find($id)->first();
          
         
         $aeroplanes->aircraft_id  = Input::get('aircraft_id');
         $aeroplanes->manufacturers_name  = Input::get('manufacturers_name');
         $aeroplanes->manufacture_date = Input::get('manufacture_date');
         $aeroplanes->Flight_hours = Input::get('Flight_hours');
         $aeroplanes->Address = Input::get('Address');
         
         $aeroplanes->save();

         // redirect
         Session::flash('edit', 'Successfully Updated Aeroplane!');
         return Redirect::to('aeroplanes');
     }








    public function addplane()
    {
      
        $aircraft_id = Input::get('planeid');
        $manufacturers_name = Input::get('manufacturer');
        $manufacture_date = Input::get('datemanufactured');
        $Flight_hours =  Input::get('flighthours');
        $Address =  Input::get('address');
      // Validation of inputs to fit the correct format

         
          $rules = array(
                     
                    'planeid'=>'Required||Between:3,120|String',
                    'manufacturer'=>'Required||Between:3,120|String',
                    'datemanufactured' => 'Required|Between:8,10|String',                
                    'flighthours' => 'Required||Integer',
                    'address' => 'Required||Between:3,120|String',
                    
            
                     );
                        //lets check validations

           $validator = Validator::make(Input::all(), $rules);

           if ($validator->fails()) 
                
                {
                  $messages = $validator->messages();

              // redirect our user back to the form with the errors from the validator
              return redirect()->route('addplaneform')->withErrors($validator);


                }

        // check if plane does exist

        $check_if_plane_exist = Aeroplanes::whereaircraft_id($aircraft_id)->first(); 
        
        if ($check_if_plane_exist)
         {
           return redirect()->route('addplaneform')->with('flash_message', 'Plane :'. $aircraft_id .' ,Does exist.Kindly clearify  on the plane id before retrying.');
        }
         else 
        {
        
        #function done if plane id soes not exist

        $plane = new Aeroplanes;
        $plane->aircraft_id=$aircraft_id;
        $plane->manufacturers_name=$manufacturers_name;
        $plane->manufacture_date=$manufacture_date;
        $plane->Flight_hours=$Flight_hours;
        $plane->Address=$Address; 
        $plane=$plane->save();
          return redirect()->route('addplaneform')->with('flash_message', 'Plane,'. $aircraft_id.' has been added successfully');
       }
        
        
   

    }
    


}
