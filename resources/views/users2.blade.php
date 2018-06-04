<style>
p {
	width:250px;
    border: 1px solid red;
    padding: 10px;
   }
</style>

@foreach ($users2 as $myuser2)
            <div id="myuser2">
            	<p>
                Логин: {{$myuser2->name}} </br>
                E-mail: {{$myuser2->email}}</br>
                <a href="{{route('myuser2_delete',$myuser2->id)}}">Удалить пользователя</a>

</p> 
            </div>

        @endforeach       
