<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #cfced3 ;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #45A0A4;
  background: -webkit-linear-gradient(right, #E3612C 0, #E3612C 33.3%, #FCCE30 33.3%, #FCCE30 66.6%, #58554B 66.6%, #58554B) bottom no-repeat;
  background: -o-linear-gradient(right, #E3612C 0, #E3612C 33.3%, #FCCE30 33.3%, #FCCE30 66.6%, #58554B 66.6%, #58554B) bottom no-repeat;
  background: linear-gradient(to right, #E3612C 0, #E3612C 33.3%, #FCCE30 33.3%, #FCCE30 66.6%, #58554B 66.6%, #58554B) bottom no-repeat;
  background-size: 100% 5px;
            }
            p
   {
    margin-right: 50px;
    margin-bottom: 20px;overflow: hidden;
    display: inline-block;
   border-radius: 500px;
   width:110px;
  color:  #36454A;
  background: -webkit-linear-gradient(top, #A4D3E0 , #A4D3E0 50%, #CBE3EB 50%);
  background: -o-linear-gradient(top, #A4D3E0 , #A4D3E0 50%, #CBE3EB 50%);
  background: linear-gradient(to top, #A4D3E0 , #A4D3E0 50%, #CBE3EB 50%);
  box-shadow: 10px 10px 20px black;
   }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Добро пожаловать!
                </div>

                 <p>
            <a href="{{route('klients')}}">Перейти к клиентам</a></p>
            <p>
            <a href="{{route('phones')}}">Перейти к телефонам</a></p>
<p>
            <a href="{{route('orders')}}">Перейти к заказам</a></p>
            
                </div>
            </div>
        </div>
    </body>
</html>
