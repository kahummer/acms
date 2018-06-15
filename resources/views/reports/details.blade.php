@extends('layouts.app')

@section('content')
<div class="container">
<!-- Start of section 1.This holds all the controls -->
<div class="container"><a href="{{ route('reports.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>


   <!-- Section 2.  Contains list of all housing units. -->
    <div class="row">
        <div class="col-md- col-md ">
            <div class="panel panel-default">
                <div class="panel-heading">Details</div>

        <div class="row">
                                  <div class="col-md-8 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                              <div class="col-md-4 ">
                                               AirCraft ID: {{$aero_detail->aircraft_id}}
                                              </div>
                                              <div class="col-md-4">
                                               Name of Manufacturer: {{$aero_detail->manufacturers_name}}
                                              </div>
                                               <div class="col-md-4">
                                               Date Manufactured: {{$aero_detail->manufacture_date}}
                                              </div>
                                               <div class="col-md-4">
                                               Flight Hours: {{$aero_detail->Flight_hours}}
                                              </div>
                                              <div class="col-md-4">
                                              Address Of Manufacturer: {{$aero_detail->Address}}
                                              </div>
                                            </div>
                                          </div>  
                                  </div>
</div>


 
  <div class="row"> 
                                  <div class="col-md-9 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                              <div class="col-md-4 ">
                                               <div class="col-md-4">
                                            
 
 <form class="form-horizontal" role="form" method="PUT" action="{{ route('accidentreport') }}">
                                                            {{ csrf_field() }}  
         <input type="hidden" name="aircraft" value="{{$aero_detail->aircraft_id}}"/>         
                <br/>  
                      <div class="form-group">
                               <div class="col-md-6 col-md-offset-2 ">
                                    <center>
                                        <button type="submit" class="btn btn-primary">
                                         Accidents Reports
                                            </button>
                                                    </center>
                                            </div>
                                        </div>
                         </form>
                                                       
                                              </div>
                            <div class="col-md-6 pull-right">
 
 <form class="form-horizontal" role="form" method="PUT" action="{{ route('repairereport') }}">
       {{ csrf_field() }}  
         <input type="hidden" name="aircraft" value="{{$aero_detail->aircraft_id}}"/>        <br/>  
                      <div class="form-group">
                                          <div class="col-md-6 col-md-offset-4 ">
                                                      <center>
                                        <button type="submit" class="btn btn-primary">
                                                                         Repairs Report
                                        </button>
                                        </center>
                                                                      </div>
                                                                    </div>
                                                                    </form>
                                                                  
                                                </div>
                                                </div>
                                               </div>  
                                                 </div>
                                         </div>
             
               <!-- End of section 2 -->
            </div>
            
        </div>
    </div>
</div>
   
@endsection
