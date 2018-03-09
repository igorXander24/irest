<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>I-Rest IO Identifícate Humano!</title>

    <!-- Styles -->
    <link href="{!! asset('libraries/random_wall/css/style.css') !!}" rel="stylesheet"/>
    <style>
        html, body {
            padding: 0;
            margin: 0;
            height: 100%;
            min-height: 100%;
            max-height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 12px;
            color: #717171;
        }

        div.content, login, form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        login {
            min-height: 177px;
            border-radius: 5px;
            padding: 10px;
            border: 1px solid rgba(0, 0, 0, .3);
            background: rgba(255, 255, 255, 1);
        }

        h1 {
            margin-top: 20px;
            line-height: 0;
        }

        form > * {
            padding: 5px;
            margin: 3px;
        }

        .form-control {
            display: block;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background: #fff none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        }

        .form-control {
            color: #777;
            opacity: 1;
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            cursor: not-allowed;
            background-color: #eee;
            opacity: 1;
        }

        .btn{
            font-weight: 500;
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            /*user-select: none;*/
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-default{
            color: #717171 !important;
            background-color: #fafafa;
            border-color: #dadada;
            border-bottom-color: #ccc;
            box-shadow: 0 1px 1px rgba(90,90,90,0.1);
        }

        .btn-primary {
            color: #fff;
            background-color: #428bca;
            border-color: #357ebd;
        }

        .btn-orange {
            color: #fff;
            background-color: #ca7b12;
            border-color: #bd4c1d;
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        .btn-default:hover,
        .btn-default:focus,
        .btn-default:active,
        .btn-default.active,
        .open>.dropdown-toggle.btn-default {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad;
        }

        .btn-default:active,
        .btn-default.active,
        .open>.dropdown-toggle.btn-default {
            background-image: none;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #3071a9;
            border-color: #285e8e;
        }

        .btn-primary:active,
        .btn-primary.active,
        .open>.dropdown-toggle.btn-primary {
            background-image: none;
        }

        .btn-success:hover,
        .btn-success:focus,
        .btn-success:active,
        .btn-success.active,
        .open>.dropdown-toggle.btn-success {
            color: #fff;
            background-color: #449d44;
            border-color: #398439;
        }

        .btn-success:active,
        .btn-success.active,
        .open>.dropdown-toggle.btn-success {
            background-image: none;
        }

        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }

        .btn-warning:hover,
        .btn-warning:focus,
        .btn-warning:active,
        .btn-warning.active,
        .open>.dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512;
        }

        .btn-warning:active,
        .btn-warning.active,
        .open>.dropdown-toggle.btn-warning {
            background-image: none;
        }

        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger:active,
        .btn-danger.active,
        .open>.dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925;
        }

        .btn-danger:active,
        .btn-danger.active,
        .open>.dropdown-toggle.btn-danger {
            background-image: none;
        }

        copyrigth{
            margin-top: 4px;
            padding: 0 4px;
            color: white;
            border-radius: 2px;
            background: rgba(0,0,0,.1);
        }

        copyrigth:before{
            background: rgba(0,0,0,.4);
        }
    </style>

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
