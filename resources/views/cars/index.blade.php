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
<ul>
    @foreach($cars as $car)
    <li>
    <a href="/cars/{{$car->id}}">
            {{$car->producer}}
</a>
    </li>
    @endforeach
</ul>
@endsection