<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/bootstrap-theme.min.css')!!}   
        {!!Html::script('js/jquery.min.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    @include('alerts.errors') 
                </div>

                <div class="links">
                   {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
                        <div class="form-group">
                            {!!Form::label('correo','Correo:')!!}
                            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('contrasena','Contraseña:')!!}
                            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
                        </div>
                        {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </body>
</html>
