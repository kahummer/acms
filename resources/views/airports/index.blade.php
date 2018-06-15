@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <!-- Start of panel 2.This holds the icons of Tenants , Reports -->
                  <div class="panel-body">
              <div class="col-md-5 col-md-offset-2">
                    <a href="{{route('listofairports')}}"><img class="circle" src="{{URL::asset('images/data.png')}}"/></a><p>Airports List</p>    
                </div>
            
              <div class="col-md-4 ">
                                    
                             <a href="{{route('addairport')}}"><img class="circle" src="{{URL::asset('images/add-new.png')}}"/></a><p>Add Airport</p>        
              </div>
               
               

                 
 
              
              </div>
             

            </div>
        </div>
    </div>
</div>

@endsection




