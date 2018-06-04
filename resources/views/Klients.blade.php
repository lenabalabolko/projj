@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<style>

   #klients
   {
    overflow: hidden;
    display: inline-block;
  color: white;
  transition: all 1s;
font-size:20px;
   }
   h1{
   	 color: #fff;
   }
  a{
  	margin-right:20px;
  	font-style: italic;
  color: white;
  transition: all 1s;
  font-size:20px;
  }
</style>

<center><h1>Клиенты</h1>
    <div id="klients">
        @foreach ($klients as $klient)
            <div>Имя: {{$klient->name}}</div>
            <div>Фамилия: {{$klient->surname}}</div>
            <div>Возраст: {{$klient->age}} </div>
        <a href="{{route('klient_delete',$klient->id)}}">Удалить</a> 
        <a href="{{route('klient_edit',$klient->id)}}">Редактировать</a>
</br> </br>
        @endforeach        
</div>
 <p>      
<a href="{{route('klient_add')}}">Добавить</a></p>




 <p>      
<a href="{{route('sum')}}">Итого</a></p>
</center>

@endsection