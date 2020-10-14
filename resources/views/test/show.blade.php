@extends('employee')


    @section('content')
    @if ($id==1)
      <h2>Регистрация</h2>
      <form action="#" method="POST">
        {{csrf_field()}}
        <label for="email">Email</label>
        <input name="email" type="text">
        <label for="password">Password</label>
        <input name="password" type="text">
        <label for="age">Age</label>
        <input name="age" type="text">
        <button type="submit">Press ME</button>
    </form>  
    @else
    <h2>Авторизация</h2>
    <form action="#" method="POST">
      {{csrf_field()}}
      <label for="email">Email</label>
      <input name="email" type="text">
      <label for="password">Password</label>
      <input name="password" type="text">
      <button type="submit">Press ME</button>
  </form> 
    @endif
      
     
    @endsection
    
