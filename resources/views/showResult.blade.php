@foreach($result as $key => $value )
   @if(is_array($value))
      {{'id'}} : {{$value['id']}} <br>
      {{'company'}} : {{$value['company']}} <br>
      {{'model'}} : {{$value['model']}} <br>
      {{'color'}} : {{$value['color']}} <br>
      {{'price'}} : {{$value['price']}}<br>
       ------------------------<br>
   @else
       {{$key}} - {{$value}} <br>
   @endif


@endforeach
