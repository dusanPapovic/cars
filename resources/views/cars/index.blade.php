<!-- <h1>Cars</h1> 
<ul>
    @foreach($cars as $car)
    <li>
    <a href="/cars/{{$car->id}}">
            {{$car->producer}}
</a>
    </li>
    @endforeach
</ul> -->

@extends('layouts.app')

@section('title','Cars')
@section('content')
<ul class="list-group">
    @foreach($cars as $car)
    <li class="list-group-item d-flex justify-content-between align-items-center">
    <a class="btn btn-primary" href="/cars/{{$car->id}}" role="button">
            {{$car->producer}}
</a>
    </li>
    @endforeach
</ul>
@endsection


