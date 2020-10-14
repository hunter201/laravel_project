@extends('employee')


    @section('content')
   
   
   
    <div class="catalog">
    
      @foreach ($result as $card)
      
      <div class="card card-standart">
        <img src='{{asset($card->imagepath)}}' alt="{{$card->imagealt}}">
        <a class="item-name" href="{{$card->descpage}}">{{$card->name}}</a>
        <hr>
        <strong>Цена: {{$card->price}}</strong>
        <a class="cart" href="#">В корзину</a>
    </div> 
  
      @endforeach
      
     </div>  
    @endsection