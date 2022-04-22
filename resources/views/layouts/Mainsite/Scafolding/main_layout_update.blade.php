<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    @include('layouts.Mainsite.Partials.sitecss')
</head>

<body>

    @include('layouts.Mainsite.Partials.header')

    <div class="container">
        <div class="columns">
            @include('layouts.Mainsite.Partials.sidebar')
            <div class="column is-9">
                @yield('content')
            </div>
        </div>

    </div>

    @include('layouts.Mainsite.Partials.sitejs')
</body>

</html>
