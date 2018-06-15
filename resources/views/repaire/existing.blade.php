@extends('layouts.app')

@section('content')
<div class="container"><a href="{{ route('repaire.index') }}"><button type="submit" class="btn btn-primary">Back</button></a> </div>
   @foreach($repaires as $repaires)
                          <div class="row">
                                  <div class="col-md-30 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                              <div class="col-md-3 ">
                                               Repaire ID:{{$repaires->repaireid}}
                                              </div>
                                              <div class="col-md-">
                                               Aeroplane:{{$repaires->aeroplane}}
                                              </div>
                                               <div class="col-md-5">
                                               Type:{{$repaires->type}}
                                              </div>
                                               <div class="col-md-5">
                                               Description:{{$repaires->description}}
                                              </div>
                                             
                                            </div>
                                          </div>  
                                  </div>
                          </div>
               @endforeach

@endsection