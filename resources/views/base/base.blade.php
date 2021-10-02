<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-csrf="{{ csrf_token() }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Macrown</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <style type="text/css">
          @font-face {
            font-family: Rubik;
            src: url('fonts/rubik/Rubik-VariableFont_wght.ttf');
          }

          @font-face {
            font-family: Karla;
            src: url('fonts/Karla/Karla-VariableFont_wght.ttf');
          }
        </style>

        <!-- Styles -->
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" />

        <style>
            body {
                font-family: "sofia-pro", "Helvetica Neue", sans-serif;
            }
        </style>
    </head>
    <body class="bg-main-color px-2 min-h-full">
      {{-- @include('components.loading.index') --}}
      {{-- @include('components.toast-notification.index') --}}
      @yield("page")
    </body>
</html>
