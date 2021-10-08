<h1>Cars</h1>
<ul>
    @foreach($cars as $car)
    <li>
            {{$car->producer}}
    </li>
    @endforeach
</ul>