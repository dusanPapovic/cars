
@extends('layouts.app')

@section('title',$car->title)

@section('content')
    <p>
        {{$car->producer}}
    </p>
    <p>
        {{$car->number_of_doors}}
    </p>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cars
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  @foreach($cars as $car)  
  <a class="dropdown-item" href="/cars/{{$car->id}}">{{$car->producer}}</a>
  @endforeach
  </div>
</div>

@endsection
