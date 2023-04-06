<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{asset('assets')}}/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    @yield("head")
</head>

<body class="skin-blue">
    @include("admin.header")

    @section('sidebar')
    @include("admin.sidebar")
    @show
    @yield('content')

    @include("admin.footer")
    @yield('foot')

</body>

</html>
