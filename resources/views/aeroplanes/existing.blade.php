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
                             <b>Aircraft ID:{{$aeroplanes->aircraft_id}}</b>
                            <div class="row">
                                <div class="col-8 col-sm-6 ">
                                 <b>Flight Hours:</b><u>{{$aeroplanes->Flight_hours}}</u>
                               </div>
                                <div class="col-4 col-sm-6">
                                <b> Manufacturers:</b><u>{{$aeroplanes->manufacturers_name}}</u>
                                </div>
                                <div class="col-8 col-sm-6">
                                <b> Date Manufactured:</b><u>{{$aeroplanes->manufacture_date}}</u>
                               </div>
                                <div class="col-4 col-sm-6">
                                <b> Manufactures Address:</b><u>{{$aeroplanes->Address}}</u>
                                </div>
                                <div class="col-8 col-sm-6">
                                <b> Created at:</b><u>{{$aeroplanes->created_at->diffForHumans()}}</u>
                               </div>
                                <div class="col-4 col-sm-6">
                                <b> updated at:</b><u>{{$aeroplanes->updated_at->diffForHumans()}}</u>
                                </div>
                                <a class="btn btn-xs btn-info" href="{{ URL::to('aeroplanes/' .$aeroplanes->id. '/edit')}}">Add Flight Hours</a>

                                {{ Form::open(array('url' => 'aeroplanes/' . $aeroplanes->id, 'class' => 'pull-left', 'onsubmit' => 'return confirm("Do you want to delete this Aeroplane")', 'id' => 'confirm_delete')) }} 
                                {{ Form::hidden('_method', 'DELETE') }} 
                                    {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
                                    <br/>
                                        {{ Form::close() }}
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