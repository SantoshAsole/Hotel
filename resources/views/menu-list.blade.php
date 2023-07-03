<h3>Hotel ID = {{$hotelID}}</h3>
<?php

   $str = Request::url();

   //Get Last Two Characters from a String
   $result = substr($str, strlen($str)-3);

   $string = preg_replace('/[^0-9]/', '', $result);
   echo 'Table No: '. $string .'';

?>
@foreach ($hotels as $item)
<p>{{$item['hotel_name']}}</p><br>
<p>{{$item['hotel_contact']}}</p><br>
<p>{{$item['hotel_address']}}</p><br>
@endforeach

@foreach ($menus as $menu)
<p>{{$menu['hotel_id']}}</p>
<p>{{$menu['menu_name']}}</p>
<p>{{$menu['menu_price']}}</p>
<p><img src='{{ asset('Menu Images/' . $menu->menu_image) }}' class="card-img-top" alt="..."></p>
<p>{{$menu['menu_description']}}</p>
@endforeach
