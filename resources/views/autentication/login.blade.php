<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <title>I-Rest IO Identifícate Humano!</title>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="{!! asset('libraries/random_wall/css/style.css') !!}" rel="stylesheet"/>
    <style>

    </style>

</head>
<body>
    <div class="content">

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
                    delay_time: 3000,
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
