@extends('layouts.app')
@section('content')
<div class="container"><a href="{{ route('repaire.index') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Add new repaire</div>
                <br/><form class="form-horizontal" role="form" method="PUT" action="{{route('addrepair')}}">
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
          <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="type" class="col-md-4 control-label">type</label>

                            <div class="col-md-6">
                                 {{Form::select('type', array('Mainteinance' => 'Mainteinance','Replacement' => 'Replacement'))}}
                            </div>
         </div>
           <div class="form-group{{ $errors->has('item') ? ' has-error' : '' }}">
                    <label for="item" class="col-md-4 control-label">Item</label>

                           <div class="col-md-6">
                                <input id="item" type="text" class="form-control" name="item" value="{{old('item')}}" required autofocus>

                                @if ($errors->has('item'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item') }}</strong>
                                    </span>
                                @endif
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

