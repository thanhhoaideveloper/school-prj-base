<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('home-page-2/css/styles.css') }}" rel="stylesheet"/>
    <link href="{{ asset('home-page-2/css/style-guide.css') }}" rel="stylesheet"/>
    <link href="{{ asset('home-page-2/css/globals.css') }}" rel="stylesheet"/>
</head>
<body>

<div class="HOMEPAGE">

    <div class="div">


        @yield('content')

        @include('user-interface.header.index')
        @include('user-interface.nav-bar.index')
        @include('user-interface.footer.index')
        @include('user-interface.button-float-footer.index')


    </div>
</div>


</body>

</html>

