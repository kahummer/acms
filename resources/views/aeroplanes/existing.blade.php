@extends('layouts.app')

@section('content')
<div class="container"><a href="{{ route('aeroplanes.index') }}"><button type="submit" class="btn btn-primary">Back</button></a> </div> 
  
      @foreach($aeroplanes as $aeroplanes)
              <div class="row">
                <div class="col-md-9 col-md-offset-2 ">
                    <div class="panel panel-default ">
                      <div class="panel-body">
                              <div class="row"> 
                       <div class="col-sm-9 col-md-offset-2 ">
                            
                            <div class="row">
                              <div class="col-8 col-sm-6 ">
                               <b>Aircraft ID: &nbsp;</b><span style="color: #f89c0f; font-size: 14px;">{{$aeroplanes->aircraft_id}}</span>
                             </div>
                             <div class="col-4 col-sm-6">
                          <b> Remaining To Check: &nbsp;</b><u style="color: red; font-size: 12px; font-weight: bolder;">{{500 - $aeroplanes->Flight_hours}}</u>
                             </div>
                                <div class="col-8 col-sm-6 ">
                                 <b>Flight Hours:&nbsp;</b>{{$aeroplanes->Flight_hours}}
                               </div>
                                <div class="col-4 col-sm-6">
                                <b> Manufacturers:&nbsp;</b>{{$aeroplanes->manufacturers_name}}
                                </div>
                                <div class="col-8 col-sm-6">
                                <b> Date Manufactured:&nbsp;</b>{{$aeroplanes->manufacture_date}}
                               </div>
                                <div class="col-4 col-sm-6">
                                <b> Manufactures Address:&nbsp;</b>{{$aeroplanes->Address}}
                                </div>
                                <div class="col-8 col-sm-6">
                                <b> Created at:&nbsp;</b>{{$aeroplanes->created_at->diffForHumans()}}
                               </div>
                                <div class="col-4 col-sm-6">
                                <b> updated at:&nbsp;</b>{{$aeroplanes->updated_at->diffForHumans()}}
                                </div>
                                
                                <a class="btn btn-xs btn-info" href="{{ URL::to('aeroplanes/' .$aeroplanes->id. '/edit')}}">Add Flight Hours</a>
                      @if (Auth::user()->hasPermissionTo('Administer roles & permissions'))
                                {{ Form::open(array('url' => 'aeroplanes/' . $aeroplanes->id, 'class' => 'pull-left', 'onsubmit' => 'return confirm("Do you want to delete this Aeroplane")', 'id' => 'confirm_delete')) }} 
                                {{ Form::hidden('_method', 'DELETE') }} 
                                    {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
                                    <br/>
                                        {{ Form::close() }}
                      @endif
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