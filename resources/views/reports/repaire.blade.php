@extends('layouts.app')

@section('content')
<div class="container">
<!-- Start of section 1.This holds all the controls -->
<div class="container"><a href="{{ route('reports.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>


   <!-- Section 2.  Contains list of all housing units. -->
    <div class="row">
        <div class="col-md- col-md">
            <div class="panel panel-default">
                <div class="panel-heading">List Of Repaires made</div>
                @foreach($details as $details)
        <div class="row">
                                  <div class="col-md-9 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                              <div class="col-md-4">
                                               Repaire Date: {{$details->created_at}}
                                              </div>
                                               <div class="col-md-4">
                                               Repaire Type:{{$details->type}}
                                              </div>
                                               <div class="col-md-4">
                                               Description: {{$details->description}}
                                              </div>
                                             
                                            </div>
                                          </div>  
                                  </div>
 </div>
 <br/>
 <br/>
 <br/>

    @endforeach
 
  
            
        </div>
    </div>
</div>
   
@endsection
