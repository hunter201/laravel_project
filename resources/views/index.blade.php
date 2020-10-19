@extends('employee')


    @section('content')
   
   <h1><a href="{{route('table')}}">Таблица</a></h1>

   <div class="slick">
       <div>
           <h3>Good morning</h3>
       </div>
       <div>
          <h3>Good afternoon</h3> 
       </div>
       <div>
          <h3>Good evening</h3> 
       </div>
       
       
       
   </div>
   @foreach ($res as $item)
       <h2>{{$item->category}}</h2> 
   @endforeach
      
   
    
    @endsection