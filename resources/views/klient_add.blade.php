@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<center><form method="POST" action="{{route('klient_create')}}">
    <label for="name">Имя: </label>
    <input type="text" name="name" style="display: block;" >
    <label for="surname">Фамилия: </label>
    <input type="text" name="surname" style="display: block;" >
    <label for="age">Возраст: </label>
    <input type="text" name="age" style="display: block;" >
    <input type="submit" name="submit">
    {{ csrf_field() }}
</form>  </center>
@endsection     
