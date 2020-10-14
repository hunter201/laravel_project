@extends('employee')


    @section('content')
   
   <h1><a href="{{route('table')}}">Таблица</a></h1>
   @foreach ($res as $item)
       <h2>{{$item->category}}</h2> 
   @endforeach
      
   
    
    @endsection