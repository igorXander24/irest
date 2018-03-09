<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>I-Rest IO Identifícate Humano!</title>

    <!-- Styles -->
    <link href="{!! asset('libraries/random_wall/css/style.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('css/login.css') !!}" rel="stylesheet"/>

</head>
<body>
    <div class="content">
        <login>
            <h1>Inicio de Sessión</h1>
            <form id="frm_login_autentication" action="/" method="post" token="'.$token.'">
                <input name="txtuser" pattern="[a-zA-Z.-_]{1,12}" id="txtuser" type="text" class="form-control" placeholder="Usuario" maxlength="12" required>
                <input name="txtpass" id="txtpass" type="password" class="form-control" placeholder="Contraseña" maxlength="24" required>
                <buttons>
                    <button class="btn btn-success">Acceder</button>
                    <button type="button" class="btn btn-orange rigth">?</button>
                </buttons>
            </form>
        </login>
        <copyrigth>
            &copy; Igor Xander Desarrollador, Peru 2018
        </copyrigth>
    </div>
    <div id="random-wall">
        <div class="overlay"></div>
    </div>
    <script src="{{asset('/libraries/random_wall/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/libraries/random_wall/js/jquery.random-wall.js')}}"></script>
    <script src="{{asset('/libraries/random_wall/js/jquery.random-wall.min.js')}}"></script>
    <script>
        (function($){
            $(function() {
                $("#random-wall").randomwall({
                    delay_time: 8000,
                    image_list: [
                        '{{ asset('img/autentication/1.jpg') }}',
                        '{{ asset('img/autentication/2.jpg') }}',
                        '{{ asset('img/autentication/3.jpg') }}',
                        '{{ asset('img/autentication/4.jpg') }}'
                    ]
                });
            });
        }(jQuery));
    </script>
</body>
</html>
