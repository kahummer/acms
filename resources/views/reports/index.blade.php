@extends('layouts.app')

@section('content')


<div class="container">

      <div class="row">
               <div class="col-md-8 col-md-offset-2 ">
                    <div class="panel panel-default ">
                        <div class="panel-body">
                          <div class="row">
                          <div class="col-md-4">
                          <div class="well">
                            <h3>Total AirCrafts <br/> <br/> <center><span style="color: #F89C0F !important;">{{$totalAircrafts}}</span></center></h3> 
                          </div>
                          </div>
                          <div class="col-md-4">
                          <div class="well">
                            <h3>Total Incidents <br/> <br/><center><span style="color: #F89C0F !important;">{{$totalIncidents}}</span></center></h3> 
                          </div>
                          </div>
                          <div class="col-md-4">
                          <div class="well">
                            <h3>Total Repairs <br/> <br/><center><span style="color: #F89C0F !important;">{{$totalRepairs}}</span></center> </h3> 
                          </div>
                          </div>
                          </div>
                        <P>Please choose the aeroplane you need reports for</P>
                            <!-- Third Section -->
                     <div class="col-md-16 col-centered ">
                               <div class="col-md-16 col-centered"> 
                    <form method="PUT" action="{{route('reportsspecification')}}">
                                        {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('housenumber') ? ' has-error' : '' }}">
                    <label for="date" class="col-md-4 control-label">Aeroplane</label>
                    <div class="col-md-6">
                    {{ Form::select('aircraft',$aircraft, null, ['class' => 'form-control']) }}
                    </div>
                    <br/>
                   </div>
                      <div class="form-group">
                            <div class="col-md-4 col-md-offset-5">
                            <br/>
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Next
                                </button>
                                </center>
                            </div>
                      </div>
                </form>
          </div>
    </div>
                           <!--  End of Third Section -->

                        </div>
                    </div>
              </div>
      </div>


</div>   
      

@endsection


                                                                      
                                                                      