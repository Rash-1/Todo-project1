@foreach($cars as $car)
    company : {{$car['company']}}<br>
    model : {{$car['model']}}<br>
    color : {{$car['color']}}<br>
    price : {{$car['price']}}<br>
    created_at : {{$car['created_at']}}<br>
    updated_at: {{$car['updated_at']}}<br>
    ---------------------------<br>
@endforeach
