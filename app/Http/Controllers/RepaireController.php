<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Repaire;
use App\Aeroplanes;
use Auth;
use Session;

class RepaireController extends Controller
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

      
      
       return view('repaire.index');
   
    }
      
      public function listofrepairs()
    {
      
       $repaires = Repaire::all(); 

       return view('repaire.existing')->with('repaires', $repaires);
   
    }

     #function opens up  a form to add a new plane
    public function addrepairsform()
      {
        $aircraft = Aeroplanes::all()->pluck('aircraft_id','aircraft_id');
        return view('repaire.new')->with('aircraft', $aircraft);
        
     
      }

    public function addrepair()
    {
      
        $repaireid =$incidentid= intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
        $aeroplane = Input::get('aeroplane');
        $item = Input::get('item');
        $type = Input::get('type');
        $description = Input::get('description');
       
         
          $rules = array(
                     
                   
                    'aeroplane'=>'Required||Between:3,120|String',
                    'item'=>'Required||Between:2,1000|String',                 
                    'description' => 'Required||Between:0,1000|string',
                    
            
                     );
                        //lets check validations

           $validator = Validator::make(Input::all(), $rules);

           if ($validator->fails()) 
                
                {
                  $messages = $validator->messages();

              // redirect our user back to the form with the errors from the validator
              return redirect()->route('addrepairsform')->withErrors($validator);


                }
       
        // check if plane does exist
        #function done if plane id soes not exist
        $repaire = new Repaire;
        $repaire->repaireid=$repaireid;
        $repaire->aeroplane=$aeroplane;
        $repaire->item=$item;
        $repaire->type=$type;
        $repaire->description=$description; 
        $repaire->save();
          return redirect()->route('addrepairsform')->with('flash_message', 'Repaire for, '. $item.' has been added successfully');
    }
}
