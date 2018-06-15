@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

           
                  <div class="panel-body">
              <div class="col-md-5 col-md-offset-2">
                    <a href="{{route('listofrepairs')}}"><img class="circle" src="{{URL::asset('images/data.png')}}"/></a><p>View Repairs & Mainteinance</p>    
                </div>
            
              <div class="col-md-4 ">
                                    
                             <a href="{{route('addrepairsform')}}"><img class="circle" src="{{URL::asset('images/add-new.png')}}"/></a><p>Add Repair Or Mainteinance</p>        
              </div>
               
               

                 
 
              
              </div>
             

            </div>
        </div>
    </div>
</div>

@endsection




