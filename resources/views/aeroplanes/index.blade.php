@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(Session::has('message'))
   

<div class="alert alert-danger"> {{Session('message')}}</div>


  @endif
        @if(Session::has('edit'))
   

<div class="alert alert-success"> {{Session('edit')}}</div>


  @endif
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <!-- Start of panel 2.This holds the icons of Tenants , Reports -->
                  <div class="panel-body">
              <div class="col-md-5 col-md-offset-2">
                    <a href="{{route('ouraeroplanes')}}"><img class="circle" src="{{URL::asset('images/data.png')}}"/></a><p>View Existing and Edit</p>    
                </div>
            
              <div class="col-md-4 ">
              @if (Auth::user()->hasPermissionTo('Administer roles & permissions'))        
                             <a href="{{route('addplaneform')}}"><img class="circle" src="{{URL::asset('images/add-new.png')}}"/></a><p> New Aeroplane
                             </p>        
              @endif
              </div>
               
               

                 
 
              
              </div>
             

            </div>
        </div>
    </div>
</div>

@endsection




