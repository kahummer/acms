@extends('layouts.app')

@section('content')
<div class="container"><a href="{{ route('airports.index') }}"><button type="submit" class="btn btn-primary">Back</button></a></div>
 @foreach($airports as $airports)
              <div class="row">
                <div class="col-md-9 col-md-offset-2 ">
                    <div class="panel panel-default ">
                      <div class="panel-body">
                              <div class="row"> 
                       <div class="col-sm-9 col-md-offset-2 ">
                             <b>Airport Name: {{$airports->name}}</b>
                            <div class="row">
                                <div class="col-8 col-sm-6 ">
                                 <b>Country:</b><u>{{$airports->country}}</u>
                               </div>
                                <div class="col-4 col-sm-6">
                                <b>County:</b><u>{{$airports->county}}</u>
                                </div>
                                <div class="col-8 col-sm-6">
                                <b>Level Of Airport:</b><u>{{$airports->level}}</u>
                               </div>
                                <div class="col-4 col-sm-6">
                                <b>Airport type:</b><u>{{$airports->type}}</u>
                                </div>
                           </div>
                       </div>
                 
                 </div> 
                      </div>
                    </div>
                </div>
              </div>
              <br/>
              <br/>
   
      @endforeach
@endsection