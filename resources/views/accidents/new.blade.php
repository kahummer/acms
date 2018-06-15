@extends('layouts.app')
@section('content')
<div class="container"><a href="{{ route('accidents.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Add new incident</div>
                <br/>
<form class="form-horizontal" role="form" method="PUT" action="{{route('addaccident')}}">
                  {{ csrf_field()}}
          <div class="form-group{{ $errors->has('aeroplane') ? ' has-error' : '' }}">
                    <label for="aeroplane" class="col-md-4 control-label">Aeroplane</label>

                            <div class="col-md-6">
                             {{Form::select('aeroplane',$aircraft, null, ['class' => 'form-control'])}}

                                @if ($errors->has('aeroplane'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aeroplane') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>
          <div class="form-group{{ $errors->has('incidentname') ? ' has-error' : '' }}">
                    <label for="incidentname" class="col-md-4 control-label">Incident name</label>

                            <div class="col-md-6">
                                <input id="incidentname" type="text" class="form-control" name="incidentname" value="{{ old('incidentname') }}" required autofocus>

                                @if ($errors->has('incidentname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('incidentname') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>
           <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                    <label for="location" class="col-md-4 control-label">Incident Location</label>

                           <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
           <div class="form-group{{ $errors->has('casualties') ? ' has-error' : '' }}">
                    <label for="casualties" class="col-md-4 control-label">Casualties</label>

                            <div class="col-md-6">
                                <input id="casualties" type="text" class="form-control" name="casualties" value="{{old('casualties')}}" required autofocus>

                                @if ($errors->has('casualties'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('casualties') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
          <div class="form-group{{ $errors->has('damagelevel') ? ' has-error' : '' }}">
                    <label for="damagelevel" class="col-md-4 control-label">Damage level</label>

                            <div class="col-md-6">
                                 {{Form::select('damagelevel', array('high' => 'high','Medium' => 'Medium','Low' => 'Low'))}}
                            </div>
          </div>
          <div >
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" id="description" name="description"></textarea>

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

