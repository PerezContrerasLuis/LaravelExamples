<html>
    <head>
        <title>admin secction</title>
        <!-- Latest compiled and minified CSS 
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        -->
        {!!Html::style('css/bootstrap.min.css')!!}

        <!-- Optional theme 
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
        {!!Html::style('css/bootstrap-theme.min.css')!!}
        <!-- Latest compiled and minified JavaScript
        <script src="js/bootstrap.min.js" ></script> -->
        {!!Html::script('js/bootstrap.min.js')!!}
    </head>

    <body>
        <header>
            header admin for test
        </header> 

         @yield('content')

        <footer>
            pie de admin 
        </footer> 
    </body>
</html> 