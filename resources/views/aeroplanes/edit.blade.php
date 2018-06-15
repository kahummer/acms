@extends('layouts.app')
@section('content')
<div class="container"><a href="{{ route('aeroplanes.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-info">
                <div class="panel-heading">Add Flight Hours/ Change Plane Info For {{$aeroplanes->manufacturers_name}}</div>
                <br/>


{{ Form::model($aeroplanes, array('route' => array('aeroplanes.update', $aeroplanes->id), 'method' => 'PUT', 'class'=> 'form-horizontal', 'name' => 'myFormName')) }}


           
          <div class="form-group">
  <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
  {{Form::label('planeid', 'Plane Id', ['class' => 'control-label col-md-4'])}}
                <div class="col-md-6">
    <!-- <input type="text" class="form-control" id="name" placeholder="Enter Project Name" name="name"> -->
    {{ Form::text('aircraft_id',null, array('class'=>'form-control', 'id'=>'planeid') )}}
                               
                </div>
          </div>
                      
         
          <div class="form-group">
  <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
  {{Form::label('manufacturer', 'Manufacturer', ['class' => 'control-label col-md-4'])}}
                <div class="col-md-6">
    <!-- <input type="text" class="form-control" id="name" placeholder="Enter Project Name" name="name"> -->
    {{ Form::text('manufacturers_name',null, array('class'=>'form-control', 'id'=>'manufacturer') )}}
                               
                </div>
          </div>

          <div class="form-group">
  <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
  {{Form::label('datemanufactured', 'Date Manufactured', ['class' => 'control-label col-md-4'])}}
                 <div class="col-md-6">
                                
                            <div class='input-group' id='calendar1'>
                                {{ Form::text('manufacture_date', null, array('class'=>'form-control', 'id'=>'datemanufactured', 'readonly'=>'readonly') )}}
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        

                                @if ($errors->has('datemanufactured'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datemanufactured') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
          <div class="form-group{{ $errors->has('flighthours') ? ' has-error' : '' }}">
  <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
  {{Form::label('current flight', 'Current Flight Hours', ['class' => 'control-label col-md-4'])}}
                 <div class="col-md-6">
                               
                            <div class='input-group' id='calendar1'>
                                {{ Form::number('current_flight_hours', null, array('class'=>'form-control', 'id'=>'flighthours', ) )}}
                               
                            </div>
                        

                                @if ($errors->has('flighthours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flighthours') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
          <div>
          <center><a href="" onclick="addValues()"> Add Flight Hours</a></center><br/>
          <div>
           <div class="form-group{{ $errors->has('flighthours') ? ' has-error' : '' }}">
  <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
  {{Form::label('flighthours', 'Total Flight Hours', ['class' => 'control-label col-md-4'])}}
                 <div class="col-md-6">
                               
                            <div class='input-group' id='calendar1'>
                                {{ Form::text('Flight_hours', null, array('class'=>'form-control', 'id'=>'flighthours', 'value' => 'total') )}}
                               
                            </div>
                        

                                @if ($errors->has('flighthours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flighthours') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
  <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
  {{Form::label('address', 'Address', ['class' => 'control-label col-md-4'])}}
                <div class="col-md-6">
    <!-- <input type="text" class="form-control" id="name" placeholder="Enter Project Name" name="name"> -->
    {{ Form::text('Address',null, array('class'=>'form-control', 'id'=>'address') )}}
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                </div>
          </div>

         
      
            <br/>  
            <div class="form-group">
                <div style="margin-left: 450px;">
                   <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                     {{ Form::submit('Update Plane Data!', array('class' => 'btn btn-success btn-md')) }}
               </div>
           </div>
              <!-- </form> -->
           {{ Form::close() }}
                        
             </div>
        </div>
    </div>
    
</div>
@endsection

<script type="text/javascript">
	function addValues() {
var current_flight = parseFloat(document.myFormName.current_flight_hours.value);
var flight_value = parseFloat(document.myFormName.Flight_hours.value);
var total = current_flight + flight_value;
 return alert('Change Total Flight Hours to:' + total);

}

</script>