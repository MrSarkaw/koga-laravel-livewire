<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>koga</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    @auth
     <script src="{{ asset('js/scripts.js') }}" defer></script>
    @endauth  
    
    <style>
        body {
            direction: rtl !important;
        }

    </style>


    @livewireStyles
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-track="reload"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>

</head>


<body class="rtl">
    <div id="app">
        @auth
            @if(Auth::user()->isAdmin())
            <div class="flex flex-wrap grayBG ">
                <!-- right side -->
                @livewire("admin.layout.rightside")


                <!-- left side -->
                @livewire("admin.layout.leftside")
            </div>
            @else
            <div class="flex flex-wrap grayBG ">
                <!-- right side -->
                @livewire("user.layout.rightside-user")


                <!-- left side -->
                @livewire("user.layout.leftside-user")
            </div>
            @endif
           
        @endauth

        @guest

            @yield("login")

        @endguest


    </div>


</body>

</html>
