@extends('employee')


    @section('content')
    
    <h1><a href="{{route('main')}}">Главная страница</a></h1>

    <form action="{{route('search')}}" method="GET">
      <input type="text" name="search">
      <button type="submit">Search</button>
    </form>
    
    @if (count($users) > 0)
    
        <table>
          @foreach ($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
              </tr>
          @endforeach
        </table>

        {{ $users->appends(['s'=>request()->search])->links() }}

        @else 

        <p>Записей не обнаружено...</p>
        
    @endif
      
    @endsection