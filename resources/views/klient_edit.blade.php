@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<center><form method="POST" action="{{route('klient_update',['id'=>$klient->id])}}">
    <label for="name">Имя: </label>
    <input type="text" name="name" style="display: block;" value="{{$klient->name}}">
    <label for="surname">Фамилия: </label>
    <input type="text" name="surname" style="display: block;" value="{{$klient->surname}}">
    <label for="age">Возраст: </label>
    <input type="text" name="age" style="display: block;" value="{{$klient->age}}">
    <input type="submit" name="submit">
    {{ csrf_field() }}
</form> </center>    
@endsection