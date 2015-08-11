<!DOCTYPE html>
<html>
<head>
	<title>App Name - @yield('title')</title>
	@include('_Partial.css')
</head>
<body>
	@section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>

    @include('_Partial.scripts')
</body>
</html>