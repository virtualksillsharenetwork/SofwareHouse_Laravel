<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials.head')
    @stack('cs')

</head>
<body>

@include('layouts.partials.header')
{{-- <!-- @include('layouts.partials.sidebar') -->--}}
@yield('content')



@include('layouts.partials.footer')


@include('layouts.partials.scripts')
@stack('js')
</body>
</html>
