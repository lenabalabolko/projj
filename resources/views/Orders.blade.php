@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<style>

   #orders
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

<center><h1>Заказы</h1>
    <div id="orders">
        @foreach ($orders as $order)
            <div>Модель: {{$order->model}}</div>
            <div>Цена: {{$order->price}}</div>
            <div>Год: {{$order->year}} г.</div>
            <div>Цена: {{$order->price}} гривен</div>
            <form class="form-horizontal" method="POST" action="{{ route('phone.back', ['phone' => $order->id]) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <button type="submit" id="order-back" class="btn btn-danger">
              <i class="fa fa-btn fa-trash"></i>Отмена
            </button>
      </form>
</br> </br>
        @endforeach   
          <div>Итого: {{$price}}</div>     
</div>

</center>

@endsection