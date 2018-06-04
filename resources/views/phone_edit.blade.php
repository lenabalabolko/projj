@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<center><form method="POST" action="{{route('phone_update',['id'=>$phone->id])}}">
    <label for="model">Модель: </label>
    <input type="text" name="model" style="display: block;" value="{{$phone->model}}">
    <label for="year">Год: </label>
    <input type="text" name="year" style="display: block;" value="{{$phone->year}}">
    <label for="price">Цена: </label>
    <input type="text" name="price" style="display: block;" value="{{$phone->price}}">
    <input type="submit" name="submit">
    {{ csrf_field() }}
</form>
</center>     
@endsection