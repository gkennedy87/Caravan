<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        @include('inc.adminNav')
        @yield('content')
    </div>
   
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script type="text/javascript" defer>
        $(document).ready(function(){
           $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });
               $.ajax({
                   url: "{{url('/contacts')}}",
                   method:'post',
                   data: {
                       name:$('#name').val(),
                       email: $('#email').val(),
                       phone: $('#phone').val(),
                       address: $('#address').val(),
                       company:$('#company').val()
                   },
                   success: function(res){
                       $('.alert').show();
                       $('.alert').html(res.success);
                       $('#contactsTable').ajax.reload();
                       
                   }
               });
               
           });
        });
    </script> 
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
