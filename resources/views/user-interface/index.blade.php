<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('home-page-2/css/styles.css') }}" rel="stylesheet"/>
    <link href="{{ asset('home-page-2/css/style-guide.css') }}" rel="stylesheet"/>
    <link href="{{ asset('home-page-2/css/globals.css') }}" rel="stylesheet"/>
</head>
<style>
    .HOMEPAGE .div-image {
        background-image: url('{{ asset('home-page-2/img/imaga.png') }}');
    }

    .HOMEPAGE .frame {
        background-image: url('{{asset('home-page-2/img/button-image.png')}}');
    }

    .HOMEPAGE .div-cover {
        background-image: url('{{asset('home-page-2/img/div-cover.png')}}');
    }

    .HOMEPAGE .div-avatar {
        background-image: url('{{asset('home-page-2/img/ellipse-5-2.png')}}');
    }

    .HOMEPAGE .div-wrapper {
        background-image: url('{{asset('home-page-2/img/rectangle-4179-4.svg')}}');
    }

    .HOMEPAGE .ellipse-wrapper {
        background-image: url('{{asset('home-page-2/img/ellipse-5-1.png')}}');
    }

    .HOMEPAGE .div-avatar-2 {
        background-image: url('{{asset('home-page-2/img/ellipse-5.png')}}');
    }

    .HOMEPAGE .frame-5 {
        background-image: url('{{asset('home-page-2/img/rectangle-4179-3.svg')}}');
    }

    .HOMEPAGE .frame-6 {
        background-image: url('{{asset('home-page-2/img/rectangle-4179.png')}}');
    }

    .HOMEPAGE .content-wrapper {
        background-image: url('{{asset('home-page-2/img/union-shape-1.svg')}}');
    }

    .HOMEPAGE .image {
        background-image: url('{{asset('home-page-2/img/rectangle-13.png')}}');
    }
    .HOMEPAGE .content-wrapper {
        background-image: url('{{asset('home-page-2/img/union-shape-1.svg')}}');
    }


</style>
<body>

<div class="HOMEPAGE">

    <div class="div">


        @yield('content')

        @include('user-interface.banner')
        @include('user-interface.header')
        @include('user-interface.footer')
        @include('user-interface.button-float-footer.index')


    </div>
</div>


</body>

</html>

