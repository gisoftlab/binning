<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="bg-light">
<div id="app">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

    @include('shared/footer')
</div>

<!-- Scripts -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
{{--<script src="{{ mix('/js/app.js') }}"></script>--}}

<script>
    $( document ).ready(function() {

        $("#compute").click(function(e){
            e.preventDefault();
            var form = $("form").serializeObject()

            $.ajax({
                type:'POST',
                url:'/compute',
                data:form,
                success:function(data){
                    $("#responce").html("<p>Compute value : "+data+"</p>");
                }
            });
        });
    });

    $.fn.serializeObject = function() {
        var o = {};
        var arr = this.serializeArray();
        $.each(arr, function( index, obj ) {
            if (typeof(o[obj.name]) === undefined) {
                if (!o[obj.name].push) {
                    o[obj.name] = [o[obj.name]];
                }
                o[obj.name].push(obj.value || '');
            } else {
                o[obj.name] = obj.value || '';
            }
        });
        return o;
    };
</script>
@stack('inline-scripts')
</body>
</html>