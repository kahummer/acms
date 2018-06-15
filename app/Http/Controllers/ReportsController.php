<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Collective\Html\Eloquent\FormAccessible;
use App\Aeroplanes;
use App\Airports;
use App\Incidents;
use App\Repaire;
use App\User;
use Auth;
use Session;

class ReportsController extends Controller
{

    public function __construct() 
    {
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
    }

//This function provides form to provide the aeroplane to fetch reports for
    
    public function index()
    {
        $aircraft = Aeroplanes::all()->pluck('aircraft_id','aircraft_id');
        $totalAircrafts = Aeroplanes::all()->count();
        $totalIncidents = Incidents::all()->count();
        $totalRepairs = Repaire::all()->count();

        return view('reports.index')->with('aircraft', $aircraft)->with('totalAircrafts', $totalAircrafts)->with('totalIncidents', $totalIncidents)->with('totalRepairs', $totalRepairs);
    }
 
      public function reportsspecification()
        {
          $flightid =  Input::get('aircraft');
         
          $aero_detail =  Aeroplanes::whereaircraft_id($flightid)->first();
          

          return view('reports.details')->with('aero_detail', $aero_detail);
        } 
          

     public function accidentreport()
        {
          $flightid =  Input::get('aircraft');
          $details =  Incidents::whereaeroplane($flightid)->get();
          return view('reports.accidents')->with('details', $details);  
        }


     public function repairereport()
        {
          $flightid =  Input::get('aircraft');
          $details =  Repaire::whereaeroplane($flightid)->get();
          return view('reports.repaire')->with('details', $details);
        }
}
