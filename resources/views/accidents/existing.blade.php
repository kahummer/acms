@extends('layouts.app')

@section('content')
<div class="container"><a href="{{ route('accidents.index') }}"><button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-arrow-left">&nbsp;<b>Back</b></span></button></a>
   @foreach($accidents as $accidents)

     <table class="table table-striped">
        <thead>
          <tr>
            <th>Image</th>
            <th>Incident Id</th>
            <th>Incident Name</th>
            <th>Plane</th>
            <th>Location</th>
            <th>Damage Levels</th>
            <th>Casualties</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img class="img-thumbnail" height="50px;" width = "200"alt="No Image Uplaoded" src="{{URL::asset('images/'.$accidents->image)}}"/></td>
            <td>{{$accidents->incidentid}}</td>
            <td>{{$accidents->incidentname}}</td>
            <td>{{$accidents->aeroplane}}</td>
            <td>{{$accidents->location}}</td>
            <td>{{$accidents->damagelevel}}</td>
            <td>{{$accidents->casualties}}</td>
            <td>{{$accidents->description}}</td>
          </tr>
          
        </tbody>
      </table>  












                         
               @endforeach
</div>
@endsection