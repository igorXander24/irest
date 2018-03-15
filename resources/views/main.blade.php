<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Rest Control Panel</title>
    <link href="{!! asset('icons/management/management.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>
<body>
    <header>
        <logo>
            <img src="{{ asset('img/company/logo.png') }}" alt="">
        </logo>
        <options>
            <module>
                <i class="calculating x32"></i>
            </module>
            <module class="active-module">
                <i class="phone-number x32"></i>
            </module>
            <module>
                <i class="id-card x32"></i>
            </module>
            <module>
                <i class="online-store x32"></i>
            </module>
            <module>
                <i class="bars-chart x32"></i>
            </module>
            <module>
                <i class="office-material x32"></i>
            </module>
            <module>
                <i class="agreement x32"></i>
            </module>
            <module>
                <i class="customer-service x32"></i>
            </module>
            <module>
                <i class="ringing x32"></i>
            </module>
            <module>
                <i class="wall-calendar x32"></i>
            </module>
        </options>
        <settings>
            <date>Vie, 9 Mar 2018</date>
            <time>12:25 p.m.</time>
            <user>
                <photo>
                    <img src=" {{ asset('img/company/users/igorxander.jpg') }} " width="36px;" height="36px" alt="Igor Alexander Quispe Vásquez">
                </photo>
                <name>
                    IgorXander19
                </name>

            </user>
        </settings>
    </header>
    <section class="left">
        <option-item o="fdffjhewer2342sfdjhskfsfdghjer">
            CLIENTES
        </option-item>
        <option-item class="active-option-active">
            CONCEPTOS
        </option-item>
        <option-item>
            EMISION DE COMPROBANTES
        </option-item>
    </section>
    <container>

    </container>
    <script src=" {{ asset('js/main.js') }} "></script>

    <script>
       /* import {Irest} from '';

        let i = new Irest();
        i.time();*/
    </script>
    <script>

    </script>
</body>
</html>