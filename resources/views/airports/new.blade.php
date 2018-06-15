@extends('layouts.app')
@section('content')
<div class="container"><a href="{{ route('airports.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Add new airport</div>
                <br/>
<form class="form-horizontal" role="form" method="PUT" action="{{route('addairport')}}">
                  {{ csrf_field()}}
                      
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Airport Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>
          <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>
          <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}">
                    <label for="county" class="col-md-4 control-label">County</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="county" value="{{ old('county') }}" required autofocus>

                                @if ($errors->has('county'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>
           <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                    <label for="level" class="col-md-4 control-label">Level</label>

                            <div class="col-md-6">
                                 {{Form::select('level', array('International' => 'International','Local' => 'Local'))}}
                            </div>
          </div>
          <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="type" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                 {{Form::select('type', array('Heliport' => 'Heliport','Seaplanebase' => 'SeaPlanebase','Airbase' => 'Airbase','Other' => 'Other'))}}
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

