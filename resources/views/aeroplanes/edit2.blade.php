@extends('layouts.app')
@section('content')
<div class="container"><a href="{{ route('aeroplanes.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-info">
                <div class="panel-heading">Add Flight Hours/ Change Plane Info</div>
                <br/>
{{ Form::model($aeroplanes, array('route' => array('aeroplanes.update', $aeroplanes->id), 'method' => 'PUT', 'class'=> 'form-horizontal')) }}

<!-- <form class="form-horizontal" role="form" method="PATCH" action="{{route('aeroplanes.update', $aeroplanes->id)}}"> -->
           
           <div class="form-group{{ $errors->has('planeid') ? ' has-error' : '' }}">
  <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
  {{Form::label('planeid', 'Plane Id', ['class' => 'control-label col-md-4'])}}
  <div class="col-md-6">
    <!-- <input type="text" class="form-control" id="name" placeholder="Enter Project Name" name="name"> -->
    {{ Form::text('planeid',null, array('class'=>'form-control', 'id'=>'name') )}}
                                @if ($errors->has('planeid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('planeid') }}</strong>
                                    </span>
                                @endif
  </div>
</div>
                      
        <!-- <div class="form-group{{ $errors->has('planeid') ? ' has-error' : '' }}">
                    <label for="planeid" class="col-md-4 control-label">Planeid</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="planeid" value="{{ old('planeid') }}" required autofocus>

                                @if ($errors->has('planeid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('planeid') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div> -->
          <div class="form-group{{ $errors->has('manufacturer') ? ' has-error' : '' }}">
                    <label for="manufacturer" class="col-md-4 control-label">Manufacturer</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="manufacturer" value="{{ old('manufacturer') }}" required autofocus>

                                @if ($errors->has('manufacturer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('manufacturer') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>
          <div class="form-group{{ $errors->has('datemanufactured') ? ' has-error' : '' }}">
                    <label for="datemanufactured" class="col-md-4 control-label">Date Manufactured</label>

                            <div class="col-md-6">
                                <div class="col-md-2">
                            <div class='input-group' id='calendar1'>
                                {!! Form::text('datemanufactured', $plan->fromDate, ["placeholder" => "2014-09-09"]) !!}
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>

                                @if ($errors->has('datemanufactured'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datemanufactured') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>
           <div class="form-group{{ $errors->has('flighthours') ? ' has-error' : '' }}">
                    <label for="flighthours" class="col-md-4 control-label">Flight Hours</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="flighthours" value="{{ old('flighthours') }}" required autofocus>

                                @if ($errors->has('flighthours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flighthours') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
      
            <br/>  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 ">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                </center>
                            </div>
                        </div>
                    </form>
             </div>
        </div>
    </div>
    
</div>
@endsection

