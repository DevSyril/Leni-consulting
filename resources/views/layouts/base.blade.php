<!DOCTYPE html>
<html lang="en">

<head>
    @yield('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin_style.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('assets/summernote/summernote-lite.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/datatables/datatables.min.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Leni consulting</title>
</head>

<body>
    @yield('content')


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ URL::asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/admin-script.js') }}"></script>
    <script src="{{ URL::asset('assets/summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ URL::asset('assets/datatables/datatables.min.js') }}"></script>
    
    @yield('js')
    <script>
        AOS.init()

        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('.menu-sm-cover').toggle(300)
            })
            $('#datatable').DataTable();
        })
    </script>
</body>

</html>
