<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Favbee Admin') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('/vendors/simple-datatables/style.css') }}">

        <!-- Iconly -->
        <link rel="stylesheet" href="{{ asset('/vendors/iconly/bold.css') }}">
        
        <!-- Vendors -->
        <link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app">
            @livewire('layouts.partials.sidebar')
            
            <div id="main" class='layout-navbar'>
                @livewire('layouts.partials.header')
                <div id="main-content">

                    <div class="page-heading">
                        <div class="page-title">
                            {{ $header }}
                        </div>
                        {{ $slot }}
                    </div>

                    @livewire('layouts.partials.footer')
                </div>
            </div>
        </div>
        <script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/vendors/apexcharts/apexcharts.js') }}"></script>
        <script src="{{ asset('/js/pages/dashboard.js') }}"></script>    
        <script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>
        <script>
            // Simple Datatable
            let table = document.querySelector('#table');
            let dataTable = new simpleDatatables.DataTable(table);
        </script>

        @livewireScripts
        <script src="{{ asset('/js/main.js') }}"></script>

    </body>
</html>
