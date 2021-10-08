<h1>Cars</h1>
<ul>
    @foreach($cars as $car)
    <li>
    <a href="/cars/{{$car->id}}">
            {{$car->producer}}
</a>
    </li>
    @endforeach
</ul>