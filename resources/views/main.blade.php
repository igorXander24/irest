<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I-Rest Control Panel</title>
    <link href="{!! asset('icons/management/management.css') !!}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
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
            flex-direction: column;
            justify-content: start;
            align-items: stretch;
            font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 12px;
            color: #717171;
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            box-sizing:border-box;
            -moz-box-sizing:border-box; /* Firefox */
            -webkit-box-sizing:border-box; /* Safari */
            flex-basis: 50px;
            background-color: #defff6;
        }

        logo {
            background-color: #ffece5;
            flex-basis: 190px;
        }

        options {
            background-color: #c8ffc8;
            flex-grow: 0.6;
        }

        settings {
            background-color: #fff3b8;
            flex-grow: 0.4;
        }

        section {
            background-color: yellowgreen;
            flex-basis: 40px;
        }

        container {
            background-color: #e7c8ff;
            flex-grow: 1;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left {
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
        }

        .right {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .right > *{
            padding: 0 6px;
        }

        module {
            display: flex;
            align-items: center;
            padding: 0 8px;
        }

        .active-module {
            background-color: yellow;
        }

        date, time, name {
            font-family: "Quicksand", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        date, name {
            font-size: 14px;
        }

        time {
            font-size: 22px;
            font-weight: bold;
        }

        user {

        }



    </style>
</head>
<body>
    <header>
        <logo class="center">
            <img src="{{ asset('img/company/logo.png') }}" alt="">
        </logo>
        <options class="left">
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
        <settings class="right">
            <date>Vie, 9 Mar 2018</date>
            <time>12:25 p.m.</time>
            <user>
                <photo>

                </photo>
                <name>
                    IgorXander19
                </name>

            </user>
        </settings>
    </header>
    <section>

    </section>
    <container>

    </container>
</body>
</html>