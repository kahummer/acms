@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard</div>

                <!--  Start of panel 1.This holds the icons to Houses,Bill,Rent -->
                <div class="panel-body">
                    <div class="col-md-4">
                    <a href="{{route('aeroplanes.index')}}"><img class="circle" src="{{URL::asset('images/plane.png')}}"/></a><p>Aeroplanes</p>
                </div>
                
                 <div class="col-md-4 ">
                    <a href="{{route('airports.index')}}"><img class="circle" src="{{URL::asset('images/airport.png')}}"/></a><p>Airports</p>
               
                              </div>
                <div class="col-md-4">
                 <a href="{{route('accidents.index')}}"><img class="circle" src="{{URL::asset('images/fire.png')}}"/></a><p>Incidents</p>     
                </div>

               
              </div>
                  <!-- End of panel 1 -->

                <!-- Start of panel 2.This holds the icons of Tenants , Reports -->
                  <div class="panel-body">
              <div class="col-md-4">
                    <a href="{{route('repaire.index')}}"><img class="circle" src="{{URL::asset('images/wrench.png')}}"/></a><p>Repairs & Mainteinance</p>    
                </div>
            
              <div class="col-md-4 ">
                   @if (Auth::user()->hasPermissionTo('Administer roles & permissions'))

                             <a href="{{route('reports.index')}}"><img class="circle" src="{{URL::asset('images/reports.png')}}"/></a><p>Reports</p> 
                      @endif
              </div>
               
               

                 
 
              
              </div>
             

            </div>
        </div>
    </div>
</div>

@endsection




