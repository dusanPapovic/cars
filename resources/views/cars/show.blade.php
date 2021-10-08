<!-- <h2>
    {{$car->title}}
</h2>
<p>
    {{$car->producer}}
</p>
<p>
    {{$car->number_of_doors}}
</p>
-->
@extends('layouts.app')

@section('title',$car->title)

@section('content')
<p>
    {{$car->producer}}
</p>
<p>
    {{$car->number_of_doors}}
</p>
@endsection