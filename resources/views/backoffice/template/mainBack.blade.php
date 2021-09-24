<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
<script src="{{asset('js/tailwind.js')}}"></script>
    <title>Document</title>
</head>
<body>
    
    @include('backoffice.partials.nav')
    

    <!--Home-->
    <section class="home-section">
        <div class="text">
                @yield('baka')
        </div>
    </section>



    <!--Customers-->


    <!--Bookink-->


</body>
</html>