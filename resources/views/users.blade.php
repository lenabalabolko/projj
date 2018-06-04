<style>
p {
	width:250px;
    border: 1px solid red;
    padding: 10px;
   }
</style>

@foreach ($users as $myuser)
            <div id="myuser">
            	<p>
                Логин: {{$myuser->name}} </br>
                E-mail: {{$myuser->email}}</br>
                <a href="{{route('query')}}">Удалить пользователя</a>

</p> 
            </div>

        @endforeach       
